<?php
include"connection.php";

$reg_name = $_POST['reg_name'];
$reg_email = $_POST['reg_email'];
$reg_password = $_POST['reg_password'];

$select = mysqli_query($database,"SELECT * FROM `users` WHERE `email`='$reg_email'");
$user = mysqli_num_rows($select);


if($user > 0){
    echo '<div class="alert alert-danger">This email is already registered</div>';

}else{
    $insert = mysqli_query($database,"INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$reg_name','$reg_email','$reg_password')");

    if($insert){

        // echo '<div class="alert alert-success">You are registered successfully </div>';
        echo '<script>location.href = "login.php";</script>';
        // header("location: ../../login.php");

    }else{      
        echo '<div class="alert alert-danger">Something went wrong, try again</div>';
    
    }
}






?>