<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa</title>
    <script src="post_test.js"></script>
</head>
<body>
    <h2>Form Input Data Siswa</h2>
    
    <form action="" method="POST">
        <div class="input-form">
            <div class="input-row">
                <div class="input-column">
                    <label for="nama[]">Nama:</label>
                    <input type="text" name="nama[]" required>
                    <input type="text" name="nama[]" required>
                    <input type="text" name="nama[]" required>
                    <input type="text" name="nama[]" required>
                    <input type="text" name="nama[]" required>
                </div>
                <div class="input-column">
                    <label for="umur[]">Umur:</label>
                    <input type="number" name="umur[]" required>
                    <input type="number" name="umur[]" required>
                    <input type="number" name="umur[]" required>
                    <input type="number" name="umur[]" required>
                    <input type="number" name="umur[]" required>
                </div>
                <div class="input-column">
                    <label for="kelas[]">Kelas:</label>
                    <input type="text" name="kelas[]" required>
                    <input type="text" name="kelas[]" required>
                    <input type="text" name="kelas[]" required>
                    <input type="text" name="kelas[]" required>
                    <input type="text" name="kelas[]" required>
                </div>
                <div class="input-column">
                    <label for="alamat[]">Alamat:</label>
                    <input type="text" name="alamat[]" required>
                    <input type="text" name="alamat[]" required>
                    <input type="text" name="alamat[]" required>
                    <input type="text" name="alamat[]" required>
                    <input type="text" name="alamat[]" required>
                </div>
            </div>
        </div>

        <button type="submit" class="submit-button">Submit</button>
    </form>

    <button id="showButton">Click to show database</button>

    <div class="content">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
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
            margin-top: 20px;
        }
        .content {
            display: none;
            background-color: blue;
            width: 100%;
            text-align: center;
            padding: 20px;
        }
        .input-form {
            margin-bottom: 20px;
            width: 100%;
        }
        .input-row {
            display: flex;
            justify-content: space-between;
        }
        .input-column {
            width: 23%;
        }
        .input-column label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        .input-column input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            color: white;
        }
        th {
            background-color: black;
            color: white;
        }
        .average {
            margin-top: 20px;
            color: white;
        }
    </style>

        <?php
            $siswa = [];
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                for ($i = 0; $i < 5; $i++) {
                    $nama = $_POST['nama'][$i];
                    $umur = $_POST['umur'][$i];
                    $kelas = $_POST['kelas'][$i];
                    $alamat = $_POST['alamat'][$i];

                    $siswa[] = [
                        'nama' => $nama,
                        'umur' => $umur,
                        'kelas' => $kelas,
                        'alamat' => $alamat
                    ];
                }
                
                $total_umur = 0;
                $jumlah_siswa = count($siswa);

                foreach ($siswa as $data) {
                    $total_umur += $data['umur'];
                }

                $rata_rata_umur = $total_umur / $jumlah_siswa;
            }
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
                <?php if (!empty($siswa)): ?>
                    <?php foreach ($siswa as $data): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                        <td><?php echo htmlspecialchars($data['umur']); ?></td>
                        <td><?php echo htmlspecialchars($data['kelas']); ?></td>
                        <td><?php echo htmlspecialchars($data['alamat']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <?php if (!empty($siswa)): ?>
        <div class="average">
            <strong>Rata-rata Umur Siswa:</strong> 
            <span id="rata-rata"><?php echo number_format($rata_rata_umur, 2); ?></span>
        </div>
        <?php endif; ?>
    </div>

    <script>
        $(document).ready(function() {
            $('#showButton').click(function() {
                $('.content').slideToggle('slow');
            });
        });
    </script>
</body>
</html>
