<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <?php
    include("koneksi.php");
    $npm = $_GET["npm"];
    $mhs = mysqli_query($conn, "SELECT * FROM mhs WHERE npm = '$npm'");
    $result = mysqli_fetch_assoc($mhs);
    ?>

    <h1>Edit data mahasiswa</h1>
    <form action="proses_update.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm" size="12" value="<?php echo $result['npm']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="30" value="<?php echo $result['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" size="20" value="<?php echo $result['email']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $result['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" size="20" value="<?php echo $result['jurusan']; ?>" required></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td><input type="text" name="fakultas" size="30" value="<?php echo $result['fakultas']; ?>" required></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" size="10" value="<?php echo $result['agama']; ?>" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_tlp" size="15" value="<?php echo $result['no_tlp']; ?>" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Simpan</button></td>
            </tr>
        </table>
    </form>

    <a href="index.php">Kembali</a>
</body>

</html>