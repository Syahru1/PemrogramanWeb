<?php include 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $idpelanggan = $_POST['tidpel'];
  $namapelanggan = $_POST['tnmapelanggan'];
  $notelp = $_POST['ttelp'];
  $lapangan = $_POST['tlapangan'];
  $nomorlapangan = $_POST['tnomor'];
  $durasi = $_POST['tdurasi'];
  $tanggal = $_POST['ttanggal'];

  $sql = "INSERT INTO Lapangan (id_pelanggan, nama_pelanggan, no_telp, lapangan, no_lapangan, durasi, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $param = array($idpelanggan, $namapelanggan, $notelp, $lapangan, $nomorlapangan, $durasi, $tanggal);
  $exec = sqlsrv_query($conn, $sql, $param);

  if ($exec === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Persewaan Lapangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center m-5">
  <div class="card text-dark bg-light w-75">
    <div class="card-body">
      <h5 class="card-title text-center">Form Input Data Persewaan Lapangan</h5>
      <form action="" method="post" class="row g-3">
        <div class="col-lg-12">
          <label for="tidpel" class="form-label">Id Pelanggan</label>
          <input type="text" class="form-control" name="tidpel" required placeholder="Masukkan Id Pelanggan">
        </div>
        <div class="col-lg-12">
          <label for="tnmapelaanggan" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control" name="tnmapelanggan" required placeholder="Masukkan Nama Pelanggan">
        </div>
        <div class="col-lg-12">
          <label for="ttelp" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" name="ttelp" required placeholder="Masukkan Nomor Telepon">
        </div>
        <div class="col-lg-12">
          <label for="lapangan" class="form-label">Pilih Lapangan</label>
          <input type="number" class="form-control" name="tlapangan" required placeholder="Masukkan Cabor Lapangan">
        </div>
        <div class="col-lg-12">
          <label for="tnomor" class="form-label">Nomor Lapangan</label>
          <input type="number" class="form-control" name="tnomor" required placeholder="Masukkan Nomor Lapangan">
        </div>
        <div class="col-lg-12">
          <label for="tdurasi" class="form-label">Durasi (Jam)</label>
          <input type="number" class="form-control" name="tdurasi" required placeholder="Masukkan Durasi">
        </div>
        <div class="col-lg-12">
          <label for="ttanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" name="ttanggal" required>
        </div>
        <div class="mt-4 col-lg-12">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-danger">Kosongkan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
