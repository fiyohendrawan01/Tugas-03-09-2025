<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM siswa WHERE id=$id";

if (mysqli_query($koneksi, $query)) {
    header("Location: tampil_data.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
