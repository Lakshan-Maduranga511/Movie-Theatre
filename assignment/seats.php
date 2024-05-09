<?php
if(isset($_POST['submit'])) {
    include "connection2.php";

    $filmname = $_POST['film'];
   
     $date= $_POST['date'];
	$time= $_POST['time'];
	
	$sql = "SELECT COUNT(*) AS sold_seats
FROM reservation
WHERE filmname = '$filmname' AND date = '$date' AND time = '$time'";

 $result = mysqli_query($conn, $sql);


if ($result) {
    
    $row = mysqli_fetch_assoc($result);
    
    
    $sold_seats_count = $row['sold_seats'];
    $final_count = 30 - $sold_seats_count;
    
	echo '<script type="text/javascript">';
echo 'alert("Available seats for ' . $filmname . ' on ' . $date . ' at ' . $time . ': ' . $final_count . '/30");';
echo 'window.location.href = "buyticket.php";'; 
echo '</script>';

          
} else {

    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
	
}
	?>