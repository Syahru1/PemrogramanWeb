<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentName = $_POST['studentName'];
    $studentID = $_POST['studentID'];
    $attendanceStatus = $_POST['attendanceStatus'];

    // Simpan ke database atau lakukan proses lainnya
    echo "Data absensi berhasil disimpan: Nama = $studentName, NIM = $studentID, Status Kehadiran = $attendanceStatus";
}
?>
