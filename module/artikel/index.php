<?php
include 'koneksi.php';
include 'modularisasi/header.php';
include 'modularisasi/sidebar.php';

?>

<div class="container">
    <h2>Daftar Mobil</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM mobil";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['merk']; ?></td>
                    <td><?php echo $row['warna']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include 'modularisasi/footer.php';
?>
