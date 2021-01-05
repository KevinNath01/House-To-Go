<?php 
include ("Connect.php");

// menangkap data id yang di kirim dari url
$id_produk = $_GET['id_produk'];


// menghapus data dari database
//mysqli_query($db,"DELETE from produk where id_produk='$id_produk'");
$query = "DELETE FROM produk WHERE produk.id_produk = $id_produk LIMIT 1";
$result = mysqli_query($db,$query);

if($result)
{
// mengalihkan halaman kembali ke index.php
echo '<script>window.alert("deleted");window.location.href = "profile.php";</script>';
}
else{
echo 'gagal';
//header("location:profile.php");
}
?>