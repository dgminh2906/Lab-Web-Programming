<?php
session_start();
session_destroy();
if (isset($_COOKIE['username'])){
    setcookie('username', "", time() + 3600);
    setcookie('password', "", time() + 3600);
}
header('location: login.php');
?>