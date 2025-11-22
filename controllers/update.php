<?php
include "../config/database.php";

$id = $_POST['id'];
$Judul = $_POST['Judul'];
$SubJudul = $_POST['SubJudul'];
$Kategori = $_POST['Kategori'];
$TanggalPost = $_POST['TanggalPost'];
$Deadline = $_POST['Deadline'];
$Deskripsi = $_POST['Deskripsi'];

$query = "UPDATE tpmodul SET Judul='$Judul', SubJudul='$SubJudul', Kategori='$Kategori', TanggalPost='$TanggalPost', Deadline='$Deadline', Deskripsi='$Deskripsi' WHERE id=$id";
mysqli_query($koneksi, $query);

header("Location: ../views/index.php");
exit;
?>
