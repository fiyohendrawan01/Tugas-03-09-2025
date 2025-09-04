<?php
include "koneksi.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query = "UPDATE siswa SET nama='$nama', email='$email', alamat='$alamat' WHERE id=$id";
if (mysqli_query($koneksi, $query)) {
    header("Location: tampil_data.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
