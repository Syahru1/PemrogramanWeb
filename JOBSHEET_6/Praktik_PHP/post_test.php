<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <h2>Data Siswa</h2>
    <button id="showButton">Click to show database</button>
    <div class="content">
        <?php
            $siswa = [
                ['nama' => 'Andi', 'umur' => '15', 'kelas' => '10A', 'alamat' => 'Malang'],
                ['nama' => 'Siti', 'umur' => '16', 'kelas' => '10B', 'alamat' => 'Batu'],
                ['nama' => 'Budi', 'umur' => '15', 'kelas' => '10A', 'alamat' => 'Dinoyo'],
                ['nama' => 'Anton', 'umur' => '25', 'kelas' => '15A', 'alamat' => 'Dinoyo'],
            ];
            $total_umur = 0;
            $jumlah_siswa = count($siswa);

            foreach ($siswa as $data) {
                $total_umur += $data['umur'];
            }

            $rata_rata_umur = $total_umur / $jumlah_siswa;
        ?>
        <table id="data-siswa">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $data): ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['umur']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="rata-rata">
            <strong>Rata-rata Umur Siswa:</strong> 
            <span id="rata-rata"><?php echo number_format($rata_rata_umur, 2); ?></span>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#showButton').click(function() {
                $('.content').slideToggle('slow');  
            });
        });
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #f8f9fa;
            min-height: 100vh;
            margin: 0;
        }
        #showButton {
            padding: 15px 0;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%; 
            font-size: 18px;
        }
        .content {
            display: none; 
            background-color: blue;
            border: 1px solid #ccc;
            width: 100%; 
            text-align: center;
            padding: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 0 auto;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            color: white;
            border: 1px solid white;
        }
        th {
            background-color: black;
            color: white;
            border: 1px solid white;
        }
        .rata-rata {
            margin-top: 30px;
            margin-bottom: 50px;
            text-align: center;
            color: white;
        }
    </style>
</body>
</html>
