<?php
$servername = "localhost";
$username = "grios";
$password = "password";
$dbname = "encuesta";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "
INSERT INTO registro 
(
nombre
) 
VALUES (
'John'
)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
