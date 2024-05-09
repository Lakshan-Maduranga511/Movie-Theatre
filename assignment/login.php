<?php
if (isset($_POST['Login'])) {
    if (isset($_POST['search'])) {
        $keyword = $_POST['search'];
	}
	include("connection2.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql1 = "SELECT * FROM customers WHERE Username=? and Password=?";
    $sql2 = "SELECT * FROM staff WHERE Username=? and Password=?";
    
        $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ss", $username, $password);
    
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("ss", $username, $password);

    try {
        
        $stmt1->execute();
        
       
        $result1 = $stmt1->get_result();
        
        
       if ($result1->num_rows === 1) {
		     header("location: buyticket.php");
			 exit();
    
   
  
	   }
        
        // Execute second query
        $stmt2->execute();
        
        // Store result
        $result2 = $stmt2->get_result();

        // Check if any row is returned
        if ($result2->num_rows === 1) {
            header("location: filmupload.html");
            exit();
        } else {
            echo "Invalid username or password";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


