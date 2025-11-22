<?php
include "../config/database.php";

$Judul = $_POST['Judul'];
$SubJudul = $_POST['SubJudul'];
$Kategori = $_POST['Kategori'];
$TanggalPost = $_POST['TanggalPost'];
$Deadline = $_POST['Deadline'];
$Deskripsi = $_POST['Deskripsi'];

$query = "INSERT INTO tpmodul (Judul, SubJudul, Kategori, TanggalPost, Deadline, Deskripsi) VALUES ('$Judul', '$SubJudul', '$Kategori', '$TanggalPost', '$Deadline', '$Deskripsi')";
mysqli_query($koneksi, $query);

header("Location: ../views/index.php");
exit;
?>
