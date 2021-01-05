<?php
include ("Connect.php");

$targetdir = "uploads/";
    
if(isset($_POST["submit"]))
{

$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);
 
for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    $ukuran = $_FILES['foto']['size'][$x];	
    $id_Member = $_POST['id_Member'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];
    $klien = $_POST['klien'];
    $phone_number = $_POST['phone_number'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_projek = $_POST['tanggal_projek'];
	if($ukuran > $limit){
		header("location:index.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:index.php?alert=gagal_ek tensi");			
		}else{		
			move_uploaded_file($tmp, 'uploads/'.date('d-m-Y').'-'.$namafile);
            $x = date('d-m-Y').'-'.$namafile;
            $sql = "INSERT INTO produk(id_Member,nama, alamat, kategori, klien, phone_number, deskripsi, tanggal_projek, foto) 
        VALUES('$id_Member','$nama','$alamat','$kategori','$klien','$phone_number','$deskripsi','$tanggal_projek','$x')";

        $query = mysqli_query ($db, $sql);
			
		if($query)
        {
            echo "<script>alert('Penambahan Produk Berhasil !');document.location='Products.php'</script>";
        }
        else{
            echo "gagal";
        }
        }
    }
}
}
}


?>