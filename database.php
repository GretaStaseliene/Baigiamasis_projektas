<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "green-house-nails";

$servername = "localhost";
$username = "coktai_greta";
$password = "kkEcmynbve6kw6MU";
$database = "coktai_greta";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>