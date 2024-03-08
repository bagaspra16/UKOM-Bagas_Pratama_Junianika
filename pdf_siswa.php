<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi RPL- Data Siswa</title>
    <link rel="shortcut icon" href="asset/icon_web.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body onload="print()">

    <div class="card my-5">
        <div class="card-header text-dark">
            <h1 style="font-weight:bolder;">Data Siswa</h1>
        </div>
        <div class="card-body">


            <table class="table table-responsive-xxl table-striped table-bordered table-hover">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                </tr>
                <?php
                $no = 1;
                $tampil = mysqli_query($connection, "SELECT * FROM siswa ORDER BY id_siswa DESC");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data['nis'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['tempat_lahir'] ?></td>
                        <td><?= $data['tgl_lahir'] ?></td>
                        <td><?= $data['jenis_kelamin'] ?></td>
                        <td><?= $data['agama'] ?></td>
                        <td><?= $data['alamat'] ?></td>

                    <?php endwhile; ?>
            </table>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>