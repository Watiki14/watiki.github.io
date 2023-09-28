<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$message = $_POST["message"];

// Save the data to the database
$sql = "INSERT INTO contact (name, email, address, phone, message) VALUES ('$name', '$email', '$address', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Data saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
