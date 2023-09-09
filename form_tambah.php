<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="proses_tambah.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm" size="12" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="30" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" size="20" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" size="20" required></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td><input type="text" name="fakultas" size="30" required></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" size="10" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_tlp" size="15" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah</button></td>
                <td><button type="reset" name="reset">Reset</button></td>
            </tr>
            <td><a href="index.php">Kembali</a></td>
        </table>
    </form>
</body>

</html>