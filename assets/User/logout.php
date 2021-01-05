<?php
session_start();
if (session_destroy())
{
        echo '<script>window.alert("Anda Berhasil Log Out");window.location.href = "../../index.php";</script>';
			
}
?>