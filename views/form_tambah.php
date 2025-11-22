<?php include "header.php"; ?>

<h3>Tambah TP Modul</h3>

<form action="../controllers/create.php" method="POST">
    <label>Judul:</label><br>
    <input type="text" name="Judul" required><br><br>

    <label>SubJudul:</label><br>
    <input type="text" name="SubJudul" required><br><br>

    <label>Kategori:</label><br>
    <input type="text" name="Kategori" required><br><br>

    <label>Tanggal Post:</label><br>
    <input type="date" name="TanggalPost" required><br><br>

    <label>Deadline:</label><br>
    <input type="date" name="Deadline" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="Deskripsi" required></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

<?php include "footer.php"; ?>
