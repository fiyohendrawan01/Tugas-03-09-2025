<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $data['email']; ?>" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required><?= $data['alamat']; ?></textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
