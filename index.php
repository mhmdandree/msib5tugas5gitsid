<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <?php
    include("koneksi.php");
    $mahasiswa = mysqli_query($conn, "SELECT * FROM mhs");
    ?>

    <h1 style="text-align: center;">Data Mahasiswa</h1>
    <a href="form_tambah.php">Tambah Data</a>

    <table align="center" style="text-align: center;" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Agama</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($mahasiswa)) { ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?php echo $row["npm"] ?>
                </td>
                <td>
                    <?php echo $row["nama"]; ?>
                </td>
                <td>
                    <?php echo $row["email"]; ?>
                </td>
                <td>
                    <?php echo $row["alamat"]; ?>
                </td>
                <td>
                    <?php echo $row["jurusan"]; ?>
                </td>
                <td>
                    <?php echo $row["fakultas"]; ?>
                </td>
                <td>
                    <?php echo $row["agama"]; ?>
                </td>
                <td>
                    <?php echo $row["no_tlp"]; ?>
                </td>
                <td>
                    <a href="form_edit.php?npm=<?php echo $row["npm"]; ?>">Edit</a> ||
                    <a href="proses_hapus.php?npm=<?php echo $row["npm"]; ?>" onclick="return confirm('yakin akan menghapus data?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>
</body>

</html>