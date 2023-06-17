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

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$companyName = $_POST['companyName'];
$contact = $_POST['contact'];
$message = $_POST['message'];

// Prepare and execute the SQL statement to insert the form data into the database
$stmt = $conn->prepare("INSERT INTO contactForm (name, email, companyName, contact, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param($name, $email, $companyName, $contact, $contact, $message);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Thank you for contacting us!";
} else {
    echo "Error: Unable to submit the form. Please try again later.";
}

//


