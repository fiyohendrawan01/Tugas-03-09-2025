<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Form Tambah Data Siswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
