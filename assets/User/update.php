<?php 
include ("Connect.php");

// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$alamat          = $_POST['alamat'];
$kategori        = $_POST['kategori'];
$klien           = $_POST['klien'];
$phone_number    = $_POST['phone_number'];
$deskripsi       = $_POST['deskripsi'];
$tanggal_projek  = $_POST['tanggal_projek'];
$id_produk       = $_POST['id_produk'];

$query="UPDATE produk SET nama='$nama', alamat='$alamat', kategori='$kategori', klien='$klien', phone_number='$phone_number', deskripsi='$deskripsi', tanggal_projek='$tanggal_projek'
WHERE id_produk = $id_produk";

$query = mysqli_query($db, $query);
// mengalihkan ke halaman index.php
if($query)
    {
        echo "<script>alert('Edit Berhasil !');document.location='profile.php'</script>";
    }
    else{
        echo "gagal";
     }
    }
?>