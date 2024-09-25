<?php
include"connection.php";
session_start();

$confirm_newpswrd = $_POST['confirm_newpswrd'];
$confirm_retypepswrd = $_POST['confirm_retypepswrd'];

// if password is matched
if($confirm_newpswrd == $confirm_retypepswrd){
    $ses = $_SESSION['session_otp'];
    $update = mysqli_query($database, "UPDATE `users` SET `password`='$confirm_newpswrd' WHERE `otp`='$ses'");

    if($update){
        echo"Your password is upadted Succesfully";
        header("location: ../../login.php");


    }else{
        echo"Something went wrong";
    }

}else{
    echo"Your Password could not matched";
}


?>