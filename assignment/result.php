<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            min-height: 100vh; /* Ensure the body covers the full viewport height */
        }
        
        .search-results {
            margin: 30px auto;
            max-width: 1000px; 
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 20px;
            text-align: left;
            border-bottom: 3px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        img {
            max-width: 160px; 
            height: auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 25px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .back-button {
            margin-top: 20px;
            text-align: center;
        }

        .back-button a {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="search-results">
        <?php
if (isset($_POST['search'])) {
    $searchid = $_POST['search'];
    include("connection2.php");

     // Check the value of searchid
    $sql = "SELECT * FROM film WHERE name = '$searchid'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned any results
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Movie Name</th><th>Description</th><th>Start Date</th><th>End Date</th><th>Time Slot</th><th>Image</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['startdate'] . "</td>"; // Display start date
            echo "<td>" . $row['enddate'] . "</td>"; // Display end date
            echo "<td>" . $row['timeslot'] . "</td>"; // Display time slot
            echo "<td><img src='upload/" . $row['imgname'] . "' alt='Movie Image'></td>";

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo '<script type="text/javascript">
            alert("Sorry, this movie is not available at this moment.");
            window.location.href = "menubar.html";
            </script>';
    }
}
?>
    </div>
    
    <div class="back-button">
        <a href="menubar.html">Back to Menu</a>
    </div>

    <footer>
        cinehouse theatre<br>
        All rights reserved. 2024
    </footer>
</body>
</html>
