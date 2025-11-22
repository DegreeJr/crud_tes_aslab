<?php
include "../config/database.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM tpmodul WHERE id=$id");

header("Location: ../views/index.php");
exit;
?>
