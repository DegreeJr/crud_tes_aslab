<?php include "../config/database.php"; ?>
<?php include "header.php"; ?>

<a class="btn" href="form_tambah.php">+ Tambah Data</a>

<table>
    <tr>
        <th>Judul</th>
        <th>SubJudul</th>
        <th>Kategori</th>
        <th>Tanggal Post</th>
        <th>Deadline</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM tpmodul");
    while ($row = mysqli_fetch_assoc($result)) :
    ?>
    <tr>
        <td><?= $row['Judul'] ?></td>
        <td><?= $row['SubJudul'] ?></td>
        <td><?= $row['Kategori'] ?></td>
        <td><?= $row['TanggalPost'] ?></td>
        <td><?= $row['Deadline'] ?></td>
        <td><?= $row['Deskripsi'] ?></td>
        <td>
            <a href="form_edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a class="btn-danger" href="../controllers/delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include "footer.php"; ?>
