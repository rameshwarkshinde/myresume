<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "szonit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact-form INSERT INTO `contact-form`(`firstname`, `lastname`, `phone`, `email`) VALUES 
('[value-2]','[value-3]','[value-4]','[value-5]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>