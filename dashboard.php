<?php
// error_reporting(0);
session_start();
include"assets/php/connection.php";
include"header.php";

// session start
 if(isset($_SESSION["email_session"])){
    $email_session = $_SESSION["email_session"];
}else{
    $email_session = '';
}

// cookie start
if(isset($_COOKIE['user'])){
    $email_cookie =  $_COOKIE['user'];
}else{
    $email_cookie = '';
}

$select = mysqli_query($database,"SELECT * FROM `users` WHERE `email`='$email_session' OR `email`='$email_cookie'");
$rec = mysqli_fetch_array($select);

// if user is signed in, than cookie extends to more 15 days
if($select){
    $cookie_name = "user";
    $cookie_value = $email_cookie;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); // 86400 = 1 day
}

// if both session or cookie is empty
if(empty($email_session) && empty($email_cookie)){
    header("location:login.php");
}


?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $rec['name']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" 
                        href="assets/php/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<?php
include"footer.php";
?>