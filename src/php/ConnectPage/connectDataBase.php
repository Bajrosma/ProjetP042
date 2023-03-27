<?php
// Variable de connexion
$servername = "localhost";
$username = "db_connection_PHP";
$password = ".Etml-";

// création de la connection
$conn = new mysqli($servername, $username, $password);

// vérifie la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>