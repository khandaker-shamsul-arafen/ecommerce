 <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "emart";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

return $con;

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>