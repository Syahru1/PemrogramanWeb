<?php include 'config.php';

if (isset($_GET['id_pelanggan'])) { // isset digunakan untuk memastikan bahwa parameter id_pelanggan sudah didefinisikan di URL (dengan metode GET)
    $id = $_GET['id_pelanggan'];
    $sql = "DELETE FROM Lapangan WHERE id_pelanggan = ?";
    $params = array($id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    header("Location: index.php"); // redirect(diarahkan kembali) ke index.php
    exit;
} else {
    echo "";
}
?>