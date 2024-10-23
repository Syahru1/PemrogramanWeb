<?php
session_start();
$mahasiswa = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 0; $i < 5; $i++) {
        $nama = $_POST['nama'][$i];
        $nim = $_POST['nim'][$i];
        $jurusan = $_POST['jurusan'][$i];
        $prodi = $_POST['prodi'][$i];
        $kelas = $_POST['kelas'][$i];

        if (!empty($nama) && !empty($nim) && !empty($jurusan) && !empty($prodi) && !empty($kelass)) {
            $mahasiswa[] = [ 
                'nama' => $nama,
                'nim' => $nim,
                'jurusan' => $jurusan,
                'prodi' => $prodi,
                'kelas' => $kelas
            ];
        }
    }
    $_SESSION['mahasiswa'] = $mahasiswa;
}
if (isset($_SESSION['mahasiswa'])) {
    $mahasiswa = $_SESSION['mahasiswa'];
    $jumlah_mahasiswa = count($mahasiswa);
}
?>
<?php if (!empty($mahasiswa)): ?>
<table id = "data-mahasiswa">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Prodi</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $data): ?>
            <tr>
                <td><?php echo htmlspecialchars($data['nama']); ?></td>
                <td><?php echo htmlspecialchars($data['nim']); ?></td>
                <td><?php echo htmlspecialchars($data['jurusan']); ?></td>
                <td><?php echo htmlspecialchars($data['prodi']); ?></td>
                <td><?php echo htmlspecialchars($data['kelas']); ?></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<div class="average">
    <strong>Total Mahasiswa yang Diinputkan:</strong> 
    <span id="total-mahasiswa"><?php echo $jumlah_mahassiwa; ?></span>
</div>
<?php endif; ?>