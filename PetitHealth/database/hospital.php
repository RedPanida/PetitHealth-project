<?php header('Access-Control-Allow-Origin: *');


require_once "connect.php";

$hospitalId = $_POST["hospitalId"];
$hospitalName = $_POST["hospitalName"];

$sql = "SELECT * FROM hospital";
$result = mysqli_query($db, $sql);
    if($result){
    if(mysqli_num_rows($result)>0){
        // $row = mysqli_fetch_array($result);
        // echo $row['hospitalId'];
        // echo $row['hospitalName'];

        while($row = mysqli_fetch_array($result)){
        echo $row['hospitalId'] ;
        echo $row['hospitalName'] . <br>;
        }
    }
    }


?>