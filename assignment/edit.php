<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_GET['id'])) {
    $reservation_id = $_GET['id'];
  
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 80px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 30px;
        }

        input[type="text"],
        select {
            width: calc(100% - 22px); 
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

       button[type="submit"] {
            padding: 10px 20px;
            margin: 5 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color:  #333;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <label for="film">Select Film:</label>
        <select id="film" name="film">
            <?php
			 include "connection2.php";
            
            $result3 = mysqli_query($conn, "SELECT  name FROM film");
            while ($row = mysqli_fetch_assoc($result3)) {
                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
            }
            ?>
        </select>

        <label for="date">Select Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Select Time:</label>
       <select id="time" name="time">
    <option value="10:30">10:30 AM</option>
    <option value="14:30">14:30 PM</option>
    <option value="17:30">17:30 PM</option>
    </select>

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number" required pattern="[0-9]{10}" title="Please enter a 10-digit mobile number">

        <button type="submit" name="submit">Change</button>
    </form>
</div>
</body>
</html>

<?php

if(isset($_POST['submit'])) {
    // Retrieve form data
    $film = $_POST['film'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    
   
    $query = "UPDATE reservation SET filmname = '$film', date = '$date', time = '$time', name = '$fullname', number = '$mobile' WHERE id = $reservation_id";
    $result = mysqli_query($conn, $query);
    
    if($result) {
       echo '<script>alert("Reservation update  successfully."); window.location.href = "viewreservation.php";</script>';
    } else {
        echo "<script>alert('Error updating reservation details.');</script>";
    }
}
?>


