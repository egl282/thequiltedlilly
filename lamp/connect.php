<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password, "test");

echo "Connected successfully";
$query = "SELECT * FROM test_table";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
 echo $row['name'];
}
?>
