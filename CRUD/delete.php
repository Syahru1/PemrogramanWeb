<?php include 'config.php';

if (isset($_GET['id_pelanggan'])) {
    $id = $_GET['id_pelanggan'];
    $sql = "DELETE FROM Lapangan WHERE id_pelanggan = ?";
    $params = array($id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Terjadi kesalahan saat menghapus data.";
    }

    header("Location: index.php");
    exit;
} else {
    echo "ID tidak ditemukan!";
}
?>