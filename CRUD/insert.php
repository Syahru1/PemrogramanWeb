<?php include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $idpelanggan = $_POST['tidpel'];
    $namapelanggan = $_POST['tnmapelanggan'];
    $notelp = $_POST['ttelp'];
    $lapangan = $_POST['tlapangan'];
    $nomorlapangan = $_POST['tnomor'];
    $durasi = $_POST['tdurasi'];
    $tanggal = $_POST['ttanggal']; 

    if (empty($idpelanggan) || empty($namapelanggan) || empty($notelp) || empty($lapangan) || empty($nomorlapangan) || empty($durasi) || empty($tanggal)) {
        echo "Semua kolom harus diisi!";
    } else {
        $sql = "INSERT INTO Lapangan (id_pelanggan, nama_pelanggan, no_telp, lapangan, no_lapangan, durasi, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = array($idpelanggan, $namapelanggan, $notelp, $lapangan, $nomorlapangan, $durasi, $tanggal);
        $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true)); 
        } else {
            header("Location: index.php");
            exit;
        }
    }
}
?>