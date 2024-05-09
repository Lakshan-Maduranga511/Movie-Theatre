 <?php
if(isset($_POST['submit'])) {
    include "connection2.php";

    $name = $_POST['filmName'];
    $description = $_POST['description'];
    $imgName = $_FILES['image']['name']; // Use 'name' instead of 'tmp_name'
    $startdate= $_POST['startDate'];
	$enddate= $_POST['endDate'];
	$time = $_POST['timeSlot'];
	
    $target = "upload/" . basename($imgName);
    
    // Insert data into database
    $sql = "INSERT INTO film (name, description, imgname, startdate, enddate, timeslot) VALUES ('$name', '$description', '$imgName','$startdate','$enddate','$time' )";
    $result = mysqli_query($conn, $sql);

    if($result) {
        // Move uploaded file after successful insertion
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo '<script type="text/javascript">
                alert("Successfully Upload Your Film");
                window.location.href = "menubar.html";
            </script>';
        } else {
            echo "Error uploading image.";
        }
    } else {
        die('Could not enter data: ' . mysqli_error($conn));
    }
}
?>
