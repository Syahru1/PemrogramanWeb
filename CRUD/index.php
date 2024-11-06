<?php include 'config.php';

$sql = "SELECT * FROM Lapangan";
$stmt = sqlsrv_query($conn, $sql);
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PERUSAHAAN MSG</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <h3 class="text-center">Persewaan</h3>
            <h3 class="text-center"> Lapangan Olahraga</h3>

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-info text-light">Form Input Data Pelanggan</div>
                            <div class="card-body">
                                <form method="POST" action="insert.php">
                                    <div class="mb-3">
                                        <label class="form-label">Id Pelanggan</label>
                                        <input type="text" name="tidpel" class="form-control" placeholder="Masukkan Id Pelanggan">
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pelanggan</label>
                                        <input type="text" name="tnmapelanggan" class="form-control" placeholder="Masukkan Nama">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="number" name="ttelp" class="form-control" placeholder="Masukkan Nomor Telepon">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Pilih Lapangan</label>
                                        <input type="text" name="tlapangan" class="form-control" placeholder="Masukkan Nomor Telepon">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Lapangan</label>
                                        <input type="number" name="tnomor" class="form-control" placeholder="Masukkan Nomor Lapangan">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Durasi (Jam)</label>
                                        <input type="number" name="tdurasi" class="form-control" placeholder="Masukkan lama durasi (jam)">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal</label>
                                        <input type="date" name="ttanggal" class="form-control" placeholder="Tanggal">
                                    </div>

                                    <div class="text-center">
                                        <hr>
                                        <button class="btn btn-primary" name="bsimpan" type="submit">Simpan</button>
                                        <button class="btn btn-danger" name="breset" type="reset">Kosongkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-info text-light">Data Persewaan</div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Nomor Telepon</th>
                                        <th>Pilih Lapangan</th>
                                        <th>Nomor Lapangan</th>
                                        <th>Durasi</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $no++ . "</td>";
                                            echo "<td>" . $row['id_pelanggan'] . "</td>";
                                            echo "<td>" . $row['nama_pelanggan'] . "</td>";
                                            echo "<td>" . $row['no_telp'] . "</td>";
                                            echo "<td>" . $row['lapangan'] . "</td>";
                                            echo "<td>" . $row['no_lapangan'] . "</td>";
                                            echo "<td>" . $row['durasi'] . "</td>";
                                            echo "<td>" . $row['tanggal']->format('Y-m-d') . "</td>"; 
                                            
                                            $id = isset($row['id_pelanggan']) ? $row['id_pelanggan'] : null;
                                            if ($id) {
                                                echo "<td>
                                                    <a href='update.php?id_pelanggan=$id' class='btn btn-warning btn-sm'>Update</a> 
                                                    <a href='delete.php?id_pelanggan=$id' class='btn btn-danger btn-sm'>Hapus</a>
                                                    </td>";
                                            } else {
                                                echo "<td>-</td>"; 
                                            }
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>