<?php
session_start();
include"connection.php";

$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];

$select = mysqli_query($database,"SELECT * FROM `users` WHERE `email`='$login_email'");

$user = mysqli_num_rows($select);
$rec = mysqli_fetch_array($select);


if($user > 0){
$sqli_password = $rec['password'];

        if($sqli_password == $login_password){

                    $sql_email= $rec['email'];

                    // use session for user, but it expires autometically if browser close
                    $_SESSION['email_session']=$sql_email;
                    echo '<script>location.href ="dashboard.php";</script>';
                     // header("location: ../../dashboard.php");  


                    //   use cookies if user checks remember me 
                    if(isset($_POST['login_remember'])){
                        $cookie_name = "user";
                        $cookie_value = $sql_email;
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); // 86400 = 1 day
                    }
        }else{
            echo"<div class='alert alert-danger'>Your password couldn't matched</div>";
        }

}else{
    echo'<div class="alert alert-danger">This Email is not registered</div>';
}


?>