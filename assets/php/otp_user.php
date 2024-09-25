<?php
include 'connection.php';
session_start();
$email_otp = $_POST['email_otp'];
// echo $email_otp;


$select = mysqli_query($database,"SELECT * FROM `users` WHERE `otp`='$email_otp'");
$rec = mysqli_fetch_array($select);
// print_r($rec);
// echo $rec['email'];

if($rec > 0){
  
    $_SESSION['session_otp']=$email_otp;
    echo"Your OTP correct";
    header("location: ../../confirm.php");

}else{
    echo"Your OTP could not matched. Try again";
}



?>