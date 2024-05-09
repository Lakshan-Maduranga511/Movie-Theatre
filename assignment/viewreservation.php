<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management</title>
    <style>
        body {
             font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
		   background-image: url('images/adminmenu1.jpeg');
		    background-attachment: fixed;
    background-size: cover;
        }

        .container {
            max-width: 800px;
            margin: 80px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .btn-group button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            background-color:  #333;
            color: #fff;
            cursor: pointer;
        }
		 .back-button {
            padding: 3px 10px;
            margin: 0 10px; 
            border: none;
            border-radius: 3px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

      
        .btn-group button:hover,
        .back-button:hover {
            background-color: #555; 
        }
		 footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0; 
            position: fixed; /* Fixed position */
            bottom: 0; /* Stick it to the bottom */
            width: 100%; /* Full width */
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="adminmenu.html"><button class="back-button">Back to Admin Menu</button></a>
        <h2>Reservation Management</h2>
        <?php
       
        include "connection2.php";

        
        $sql = "SELECT * FROM reservation";
        $result = mysqli_query($conn, $sql);

        
        if (mysqli_num_rows($result) > 0) {
           
            echo "<table>";
            echo "<tr><th>Film name</th><th>Date</th><th>Time</th><th>Name</th><th>Number</th><th>Action</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
				echo "<td>" . $row["filmname"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["number"] . "</td>";
                echo "<td class='btn-group'>";
               echo "<a href='delete.php?id=" . $row["id"] . "'><button>Delete</button></a>";
                echo "<a href='edit.php?id=" . $row["id"] . "'><button>Update</button>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data available.";
        }

        
        mysqli_close($conn);
        ?>
    </div>
     <footer>
        cinehouse theatre<br>
        All rights reserved. 2024
    </footer>
</body>
 
</html>
