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

// Select data from the 'userGames' table
$sql_userGames = "SELECT * FROM userGames";
$result_userGames = $conn->query($sql_userGames);

// Select data from the 'mygames' table
$sql_games = "SELECT * FROM games";
$result_games = $conn->query($sql_games);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Tables</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .table-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 20px;
        }
        .table-container table {
            width: 45%;
        }
    </style>
</head>
<>
    <div class="container3">
        <h3>Compare Your Games with My Games</h3>
        <div class="table-container">
            <div>
                <h4>Your Games List</h4>
                <?php
                if ($result_userGames->num_rows > 0) {
                    echo "<table>
                            <tr>
                                <th>ID</th>
                                <th>Game Name</th>
                                <th>Price</th>
                                <th>Rate</th>
                                <th>Compatibility</th>
                            </tr>";
                    // Output data of each row
                    while($row = $result_userGames->fetch_assoc()) {
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
                ?>
            </div>
            <div>
                <h4>My Games List</h4>
                <?php
                if ($result_games->num_rows > 0) {
                    echo "<table>
                            <tr>
                                <th>Game Name</th>
                                <th>Price</th>
                                <th>Rate</th>
                                <th>Compatibility</th>
                            </tr>";
                    // Output data of each row
                    while($row = $result_games->fetch_assoc()) {
                        echo "<tr>
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
                ?>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: space-between; width: 50%; margin: 20px auto; background-color:transparent; height:100px;">
        <form class="frm" method="post" action="edit.php" style="margin-right: 10px;">
            <input class="te" type="text" name="id" placeholder="ID of the game you want to edit">
            <button class="btn3" type="submit">Edit</button>
        </form>
        <form class="frm" method="post" action="delete.php">
            <input class="te" type="text" name="id" placeholder="ID of the game you want to delete">
            <button class="btn3" type="submit">Delete</button>
        </form>
    </div>
    <button class="btn2" onclick="window.location.href='index.php'">Go Back</button>   
</body>
</html>

<?php
// Close connection
$conn->close();
?>