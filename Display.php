<style>
   
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background-color: #ffffff;
  box-shadow: 0 20 35px rgba(0, 0, 1, 0.9);
}

th,
td {
  border: 1px solid #757575;
  padding: 10px;
  text-align: left;
}

th {
  background-color: rgb(125, 125, 235);
  font-weight: bold;
  color: #ffffff;
}

td {
  background-color: #ffffff;
}
</style>
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
    echo "Connected successfully<br>";

    // Select data from the 'games' table
    $sql = "SELECT * FROM games";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Game Name</th>
                    <th>Price</th>
                    <th>Rate</th>
                    <th>Compatibility</th>
                </tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
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

    // Close connection
    $conn->close();
?>