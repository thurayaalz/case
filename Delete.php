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

// Handle deletion of a row
if (isset($_POST['id']) && !isset($_POST['confirm'])) {
    $id = $_POST['id'];
    echo "<script>
        var confirmDelete = confirm('Are you sure you want to delete this $_POST[id] record?');
        if (confirmDelete) {
            document.getElementById('confirmForm').submit();
        } else {
            window.location.href = 'testtavle.php';
        }
    </script>";
}

$id = $_POST['id'];
$sql = "DELETE FROM userGames WHERE id=$id";
if (isset($_POST['id'])  ) {
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error . "<br>";
    }
    echo "<a href='testtavle.php'>Back to Games Lists</a>";
} else {
    echo "No ID provided for deletion.<br>";
    echo "<a href='testtavle.php'>Back to Games Lists</a>";
}

// Close connection
$conn->close();
?>
<button class="btn2" onclick="window.location.href='testtavle.php'">Go Back</button>   
<form id="confirmForm" method="post" action="Delete.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="confirm" value="true">
</form>