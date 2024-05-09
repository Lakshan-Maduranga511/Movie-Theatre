<?php
if(isset($_POST['submit'])) {
    include "connection2.php";

    $filmname = $_POST['film'];
   
     $date= $_POST['date'];
	$time= $_POST['time'];
	$name = $_POST['fullname'];
	$num = $_POST['mobile'];
     
    
    
   $sql = "INSERT INTO reservation (date, time, name, number,filmname) VALUES ('$date', '$time', '$name', '$num', '$filmname')";
   
  

    $result = mysqli_query($conn, $sql);

    if($result) {
    
        
           echo '<script type="text/javascript">
        alert("Successfully Update Your Reservation");
        window.location.href = "menubar.html";
      </script>';

        
    } else {
        die('Could not enter data: ' . mysqli_error($conn));
    }
}
?>