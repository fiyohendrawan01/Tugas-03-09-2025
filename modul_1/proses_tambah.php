<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

if (empty($nama) || empty($email) || empty($alamat)) {
    echo "Semua field harus diisi!";
    exit;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Format email tidak valid!";
    exit;
}

$query = "INSERT INTO siswa (nama, email, alamat) VALUES ('$nama', '$email', '$alamat')";
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan. <a href='tampil_data.php'>Lihat Data</a>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
