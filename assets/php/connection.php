<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "registration";

$database = mysqli_connect($servername, $username, $password, $db);

if($database){
    // echo"<div class='alert alert-success'>Database is connected</div> <br>";
}else{
    echo"<div class='alert alert-danger'>Database is not connected</div> <br>";
}

?>