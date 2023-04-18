<?php
include 'koneksi.php';
include 'modularisasi/header.php';
// include 'sidebar.php';
?>

<div class="container">
    <h2>Tambah Mobil Baru</h2>
    <form method="post" action="simpan.php">
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" id="merk" name="merk" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna:</label>
            <input type="text" class="form-control" id="warna" name="warna" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
<?php
include 'modularisasi/footer.php';
?>
