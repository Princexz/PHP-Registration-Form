<?php
include"connection.php";

session_start();
// $username = $_SESSION['session_username'];

$forget_email = $_POST['forget_email'];

$select = mysqli_query($database,"SELECT * FROM `users` WHERE `email`='$forget_email'");
$user = mysqli_num_rows($select);


if($user > 0){
    $otp = rand(000000,999999);
    echo $otp;

    // OTP set in databse
    $update = mysqli_query($database, "UPDATE `users` SET `otp`='$otp' WHERE `email`='$forget_email'");

    // fetch user name to call user with his/her name
    $rec = mysqli_fetch_array($select);
    $username = $rec['name'];

    // OTP send through mail
    $subject = "Reset OTP";
    $mybody = "<p>Hi $username, <br> 
    Your OTP is $otp. Please dont share this with others.<br>
    </p>";

    // Additional headers for HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers .= "From: Website Admin <aljanatmart@gmail.com>\r\n";

    $mail_sent = mail($forget_email, $subject, $mybody, $headers);

    if($mail_sent){
        echo '<div class="alert alert-success">Email has been sent</div>';
        header("location: ../../otp.php");
         
      } else {
         echo "<div class='alert alert-danger'>Your mail could not be sent.></div>";
      }
   


}else{
    echo"This is email is not registerd with any user";
}



?>