<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
   <link rel="stylesheet" href="buyticket.css">
</head>
<?php

include 'connection2.php';

$result1 = mysqli_query($conn,"SELECT  name FROM film");
 $result3 = mysqli_query($conn,"SELECT  name FROM film");
 $result4 = mysqli_query($conn,"SELECT  timeslot FROM film");

?> 
<body>
    <div class="container">
        <h1>1.View Available Seats </h1>
        <form action="seats.php" method="post">
        <label for="film">Select Film:</label>
          <select id="film" name="film">
               <?php
			    while ($row = mysqli_fetch_assoc($result1)) {
                    
                    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                }
			   
			   
			   ?>
            </select>
            
            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date">
            <label for="time">Select Time:</label>
     <select id="time" name="time">
    <option value="10:30">10:30 AM</option>
    <option value="14:30">14:30 PM</option>
    <option value="17:30">17:30 PM</option>
    </select>

               
            <input type="submit" name="submit" value="view seats">
        </form>
        
        
       <h2>2.Book Your Film </h2>
         
         
        <form action="confirmbooking.php" method="post">
            <label for="film">Select Film:</label>
            <select id="film" name="film">
               <?php
			    while ($row = mysqli_fetch_assoc($result3)) {
                
                    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                }
			   
			   
			   ?>
            </select>

            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date">

           
             <label for="time">Select Time:</label>
     <select id="time" name="time">
    <option value="10:30">10:30 AM</option>
    <option value="14:30">14:30 PM</option>
    <option value="17:30">17:30 PM</option>
    </select>
               
           
             
            
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number">

            <input type="submit" name="submit" value="Confirm Booking">
         
        </form>
       
    </div>
    
</body>
</html>

 
