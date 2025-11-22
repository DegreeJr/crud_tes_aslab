<?php 
include "../config/database.php";
include "header.php";

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM tpmodul WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<h3>Edit Data TP Modul</h3>

<form action="../controllers/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <label>Judul:</label><br>
    <input type="text" name="Judul" value="<?= $data['Judul'] ?>" required><br><br>

    <label>SubJudul:</label><br>
    <input type="text" name="SubJudul" value="<?= $data['SubJudul'] ?>" required><br><br>

    <label>Kategori:</label><br>
    <input type="text" name="Kategori" value="<?= $data['Kategori'] ?>" required><br><br>

    <label>Tanggal Post:</label><br>
    <input type="date" name="TanggalPost" value="<?= $data['TanggalPost'] ?>" required><br><br>

    <label>Deadline:</label><br>
    <input type="date" name="Deadline" value="<?= $data['Deadline'] ?>" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="Deskripsi" required><?= $data['Deskripsi'] ?></textarea><br><br>

    <button type="submit">Update</button>
</form>

<?php include "footer.php"; ?>
