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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Fetch the current values for the game to be edited
    $sql = "SELECT * FROM userGames WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $gameName = $_POST['gameName'];
    $price = $_POST['price'];
    $rate = $_POST['rate'];
    $compatibility = $_POST['compatibility'];

    $sql = "UPDATE userGames SET gameName='$gameName', price='$price', rate='$rate', compatibility='$compatibility' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.alert('Record updated successfully')</script>";

    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container2">
        <h3>Edit Game</h3>
        <form method="post" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="gameName">Game Name:</label>
            <input type="text" id="gameName" name="gameName" value="<?php echo $row['gameName']; ?>" required>
            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" value="<?php echo $row['price']; ?>" required>
            <label for="rate">Rate:</label>
            <input type="number" step="0.1" id="rate" name="rate" value="<?php echo $row['rate']; ?>" required>
            <label for="compatibility">Compatibility:</label>
            <input type="text" id="compatibility" name="compatibility" value="<?php echo $row['compatibility']; ?>" required>
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>
<button class="btn2" onclick="window.location.href='index.php'">Go Back</button>   
<?php
// Close connection
$conn->close();
?>