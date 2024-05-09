<?php
if (isset($_POST['register'])) {
    include("connection2.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO customers (Username, Password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    $success = mysqli_stmt_execute($stmt);
    
    if ($success) {
        echo '<script type="text/javascript">
            alert("Successfully registered");
            window.location.href = "register.html";
          </script>';
        exit();
    } else {
        echo "Could not enter data: " . mysqli_error($conn);
    }
} else {
    echo "Your form is not submitted yet. Please fill the form and visit again.";
}
?>