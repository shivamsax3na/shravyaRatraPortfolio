<?php
$servername = "localhost";
$username = "u226556951_shivam";
$password = "D5j;n#PQ";
$dbname = "u226556951_contact";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
echo "Connected successfully";

// Close the connection
$conn->close();
?>
