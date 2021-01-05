<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "housetogo";
$db = mysqli_connect($server, $user, $password, $database) or die ("Gagal Masuk Database");

if(!$db)
{
    die("Gagal terhubung dengan database:".mysqli_connect_error());
}
else{
    //echo "Connected";
}

?>