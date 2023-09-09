<?php
include("koneksi.php");
$hapus = mysqli_query($conn, "DELETE from mhs WHERE npm='$_GET[npm]'");

echo "<script>
        alert('data berhasil dihapus!');
        document.location.href =  'index.php';
        </script>";
