<?php
// error_reporting(0);
session_start();
session_destroy();

// Set the cookie name
$cookie_name = "user";

// Set the cookie with an expired time
setcookie($cookie_name, "", time() - 3600, "/");

header("location: ../../login.php")

?>