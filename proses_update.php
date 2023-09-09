<?php
include("koneksi.php");

$npm = $_POST["npm"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];
$fakultas = $_POST["fakultas"];
$agama = $_POST["agama"];
$no_tlp = $_POST["no_tlp"];

$query = mysqli_query($conn, "UPDATE mhs SET
        nama='$nama',
        email='$email',
        alamat='$alamat',
        jurusan='$jurusan',
        fakultas='$fakultas',
        agama='$agama',
        no_tlp='$no_tlp'
        WHERE npm='$npm'");

if ($query) {
    echo " <script> 
        alert ('data berhasil diubah!');
        document.location.href = 'index.php;
        </script>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}
