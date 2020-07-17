<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";


$email =  $_POST['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests (email)
VALUES ( '$email')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php?suscription=success");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>