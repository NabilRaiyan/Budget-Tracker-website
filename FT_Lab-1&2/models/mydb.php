<?php
// Database connection
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "customer"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
if (isset($_GET['id']) && isset($_GET['name'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];

    $sql = "SELECT * FROM customerRegistration WHERE id = $id AND name = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, return data
        $user = $result->fetch_assoc();
        echo json_encode($user);
    } else {
        // User not found
        echo json_encode(array("error" => "User not found"));
    }
} else {
    // Parameters not provided
    echo json_encode(array("error" => "ID and name parameters are required"));
}

$conn->close();
?>
