<?php
$servername = "localhost";
$username_db = "root";
$password_db = "";

// Create connection

$db = mysqli_connect($servername, $username_db, $password_db, 'petit_health');

//Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
} 
 //echo "Connected successfully" . "<br>";

?>