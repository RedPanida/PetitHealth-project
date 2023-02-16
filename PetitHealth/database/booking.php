<?php header('Access-Control-Allow-Origin: *');


require_once "connect.php";

// $bookVdocallId = $_POST["bookVdocallId"];
$dateapp = $_POST["dateappoint"];

 $query = "INSERT INTO bookVdocall (dateAppoint) VALUES('$dateapp')";
 mysqli_query($db, $query);
?>

