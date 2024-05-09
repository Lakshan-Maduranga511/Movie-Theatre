<?php

if(isset($_GET['id'])) {
    $reservation_id = $_GET['id'];

  
    include "connection2.php";

    
    $sql = "DELETE FROM reservation WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $reservation_id);
        $success = mysqli_stmt_execute($stmt);
        
      
        if ($success) {
            
            echo '<script>alert("Reservation deleted successfully."); window.location.href = "viewreservation.php";</script>';
        } else {
           
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

  
    mysqli_close($conn);
} else {

    echo "Reservation ID not provided.";
}
?>
