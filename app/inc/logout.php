<?php
include('Connection.php');
session_start();

//destroy session



unset($_SESSION['Email']);
unset($_SESSION['Password']);
session_destroy();

// header('location: localhost/Stock/app/login.php');

?>