<?php
$userId = $_GET['id'];
$userName = $_GET['name'];

// Assuming you have a database connection established
// Replace this with your actual database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customerRegistration WHERE id = '$userId' AND name = '$userName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
