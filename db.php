<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MOI</title>
<style>
    body {
        background-color: #A0E1FF;
        color: black;
        font-family: Arial, sans-serif;
        font-size: 30;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
</style>

</head>
<body>
    <?php
    // Database credentials
    $servername = "localhost:8889"; // Change this to your database server
    $username = "root"; // Change this to your database username
    $password = "root"; // Change this to your database password
    $database = "repliigid"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to select a random sentence from the database
    $query = "SELECT repliik FROM laused ORDER BY RAND()";
    $result = $conn->query($query);

    // Display the sentence
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<p style='text-align: center;'>" . $row["repliik"] . "</p>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
