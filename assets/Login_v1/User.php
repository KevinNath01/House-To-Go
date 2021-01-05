<?php
session_start();

if(!isset($_SESSION['Email']) || $_SESSION['role']!="user"){
    header("location: ../User/user.php");
}

?>
