<?php 
include 'config.php';

if (isset($_GET['id_pelanggan'])) {
    $id = $_GET['id_pelanggan'];
    $sql = "SELECT * FROM Lapangan WHERE id_pelanggan = ?";
    $param = array($id);
    $exec = sqlsrv_query($conn, $sql, $param);
    $old = sqlsrv_fetch_array($exec, SQLSRV_FETCH_ASSOC);

    if ($old) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $idpelanggan = $_POST['id_pelanggan']; 
            $namapelanggan = $_POST['nama_pelanggan'];
            $notelp = $_POST['no_telp'];
            $lapangan = $_POST['lapangan'];
            $nomorlapangan = $_POST['no_lapangan'];
            $durasi = $_POST['durasi'];
            $tanggal = $_POST['tanggal'];

            $sql = "UPDATE Lapangan SET id_pelanggan = ?, nama_pelanggan = ?, no_telp = ?, lapangan = ?, no_lapangan = ?, durasi = ?, tanggal = ? WHERE id_pelanggan = ?";
            $param = array($idpelanggan, $namapelanggan, $notelp, $lapangan, $nomorlapangan, $durasi, $tanggal, $id);
            $exec = sqlsrv_query($conn, $sql, $param);

            if ($exec) {
                echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
            } else {
                echo "Terjadi kesalahan saat memperbarui data.";
            }
        }
        ?>
        <h2>Update Data Lapangan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan</label>
                <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" value="<?php echo $old['id_pelanggan']; ?>" required>
            </div>

            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="<?php echo $old['nama_pelanggan']; ?>" required>
            </div>

            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?php echo $old['no_telp']; ?>" required>
            </div>

            <div class="form-group">
                <label for="lapangan">Lapangan</label>
                <input type="text" name="lapangan" id="lapangan" class="form-control" value="<?php echo $old['lapangan']; ?>" required>
            </div>

            <div class="form-group">
                <label for="no_lapangan">No Lapangan</label>
                <input type="text" name="no_lapangan" id="no_lapangan" class="form-control" value="<?php echo $old['no_lapangan']; ?>" required>
            </div>

            <div class="form-group">
                <label for="durasi">Durasi (Jam)</label>
                <input type="number" name="durasi" id="durasi" class="form-control" value="<?php echo $old['durasi']; ?>" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $old['tanggal']->format('Y-m-d'); ?>" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update</button>
            <a href="index.php" class="btn btn-secondary mt-3">Batal</a>
        </form>

        <?php
    } else {
        echo "Data tidak ditemukan!";
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
