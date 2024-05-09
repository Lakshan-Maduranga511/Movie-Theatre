<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    .actions {
        margin-bottom: 20px;
        text-align: center;
    }

    .actions button {
        padding: 10px 25px;
        margin: 0 20px; /* Adjust margin between buttons here */
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
</style>

<body>
    <div class="container">
        <h2>Reservation Management</h2>
        <div class="actions">
          
            <form action="viewreservation.php" method="POST">
                <button type="submit">View Reservation</button>
            </form>
            
            <!-- Add some extra space between the buttons -->
            <div style="margin-top: 10px;"></div>
            
            <form action="staffreg.html" method="POST">
                <button type="submit">Staff Registration</button>
            </form>
        </div>
    </div>
</body>
</html>

