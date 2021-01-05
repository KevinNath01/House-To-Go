<?php 

include ("Connect.php");

// menyimpan data kedalam variabel
$id_Member      = $_POST['id_Member'];
$First_Name     = $_POST['First_Name'];
$Last_Name      = $_POST['Last_Name'];
$Birthday       = $_POST['Birthday'];
$Phone_Number   = $_POST['Phone_Number'];
$addres         = $_POST['addres'];
$city           = $_POST['city'];
$post_code      = $_POST['post_code'];

$query="UPDATE member SET First_Name='$First_Name', Last_Name='$Last_Name', Birthday='$Birthday', Phone_Number='$Phone_Number', addres='$addres', city='$city' ,post_code='$post_code'
WHERE id_Member = $id_Member";

$query = mysqli_query($db, $query);
// mengalihkan ke halaman index.php
if($query)
    {
        echo "<script>alert('Edit Berhasil !');document.location='profile.php'</script>";
    }
    else{
        echo "gagal";
     }
    
?>