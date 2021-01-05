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

$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO contact(nama, email, subjek, pesan) VALUES ('$nama','$email','$subjek','$pesan')";
$query = mysqli_query($db,$sql);
if ($query)
{
    echo "<script>alert('Pesan Terkirim ! kami akan membalas anda maksimal 3x24 jam');document.location='index.php'</script>";
   /* echo " data yang diinputkan berhasil";
    echo "<script>alert('Pendaftaran Berhasil !');</script>";
    header("Location: http://localhost/Project_Web/Arsha/assets/Login_v1/Login.html");*/
}
else
{
    echo "<script>alert('Pengiriman Gagal');document.location='http://localhost/Project_Web/Arsha/assets/Login_v1/SignUp/index.html'</script>";
}
?>

