<?php
include ("Connect.php");

/*if(isset($_POST['submit'])){*/

$First_Name = $_POST['first_name'];
$Last_Name = $_POST['last_name'];
$Birthday = $_POST['birthday'];
$Gender = $_POST['gender'];
$Email = $_POST['email'];
$Phone_Number = $_POST['phone'];
$addres = $_POST['addres'];
$city = $_POST['city'];
$post_code = $_POST['post_code'];
$Password = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
             
$sql = "INSERT INTO member(First_Name, Last_Name, Birthday,Gender, Email, Phone_Number,addres,city,post_code,pwd) 
VALUES('$First_Name','$Last_Name','$Birthday','$Gender','$Email','$Phone_Number','$addres','$city','$post_code','$Password')";

$query = mysqli_query ($db, $sql);

if ($query)
{
    echo "<script>alert('Pendaftaran Berhasil !');document.location='../Login.php'</script>";
  
}
else
{
    echo "<script>alert('Email/Nomor Telepon Sudah Terdaftar !');document.location='http://localhost/Project_Web/Arsha/assets/Login_v1/SignUp/index.html'</script>";
}
         
?>