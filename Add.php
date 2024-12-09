<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mygames";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for inserting a new row
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $gameName = $_POST['gameName'];
    $price = $_POST['price'];
    $rate = $_POST['rate'];
    $compatibility = $_POST['compatibility'];

    $sql = "INSERT INTO userGames (gameName, price, rate, compatibility) VALUES ('$gameName', '$price', '$rate', '$compatibility')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }
}

// Select data from the 'userGames' table
$sql = "SELECT * FROM userGames";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Games</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
    <div class="container2";>
    <h3>Share Your Top Games</h3>
    <form method="post" action="add.php">
        <label for="gameName">Game Name:</label>
        <input type="text" id="gameName" name="gameName" required><br>
        <label for="price">Price</label>
        <input type="number" step="0.01" id="price" name="price" required><br>
        <label for="rate">Rate:</label>
        <input type="number" step="0.1" id="rate" name="rate" required><br>
        <label for="compatibility">Compatibility:</label>
        <input type="text" id="compatibility" name="compatibility" required><br>
        <input class="btn"; type="submit" name="insert" value="Insert">
    </form>

    <h3>Your Games List</h3>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Game Name</th>
                    <th>Price</th>
                    <th>Rate</th>
                    <th>Compatibility</th>
                </tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["gameName"] . "</td>
                    <td>" . $row["price"] . "</td>
                    <td>" . $row["rate"] . "</td>
                    <td>" . $row["compatibility"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
    </div>
</body>
</html>