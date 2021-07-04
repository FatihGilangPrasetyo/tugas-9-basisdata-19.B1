<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM anggota';
$result = mysqli_query($mysqli, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Tugas 9 Basis Data (CRUD)</h1>
        </header>
    <br>
            <fieldset>
        <h2>Tabel Anggota</h2>
        <a href="add.php">add anggota</a>
        <br><br>
            <div class="main">
            <table>
                <tr>
                    <th>id_anggota</th>
                    <th>kode_anggota</th>
                    <th>nama_anggota</th>
                    <th>jk_anggota</th>
                    <th>jurusan_anggota</th>
                    <th>no_telp_anggota</th>
                    <th>alamat_anggota</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['id_anggota'];?></td>
                    <td><?= $row['kode_anggota'];?></td>
                    <td><?= $row['nama_anggota'];?></td>
                    <td><?= $row['jk_anggota'];?></td>
                    <td><?= $row['jurusan_anggota'];?></td>
                    <td><?= $row['no_telp_anggota'];?></td>
                    <td><?= $row['alamat_anggota'];?></td>
                    <td>
                        <a href="edit.php?id_anggota=<?php echo $row['id_anggota']; ?>">Edit</a>
                        <a href="delete.php?kode_anggota=<?php echo $row['kode_anggota']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
            </div>
            </fieldset>
            </div>
</body>
</html>