<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/print.css">
    <title>Posyandu - Desa Balagedog</title>
    <link rel="stylesheet" href="css/obb.css">
    <link rel="icon" href="img/Majalengka.png" type="image/ico" />
</head>

<body>
    <script>
        window.print()
    </script>
    <h1 align="center"> Laporan Register Anak</h1>
    <table class="table" border="1" width="100%">
        <thead>
            <tr class=" table table-danger">
                <th scope="col">No</th>
                <th scope="col">Id Anak</th>
                <th scope="col">Nama Anak</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Berat</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Ibu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $db = new database();
            $data_bayi = $db->data_bayi();
            $no = 1;
            foreach ($data_bayi as $row) {
            ?>
                <tr class="table-light">
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['kode']; ?></td>
                    <td><?= $row['nama_anak']; ?></td>
                    <td><?= $row['jeniskelamin']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td><?= $row['berat_badan']; ?></td>
                    <td><?= $row['nama_ayah']; ?></td>
                    <td><?= $row['nama_ibu']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <table align="right" cellspadding="0" cellspacing="0">
        <tr>
            <td>
                <center>Cirebon, <?php echo date("d F Y") ?></center>

                <center>Ketua Posyandu</center>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
                <p>Fahrul Firgiana M.kom S.kom</p>
            </td>
        </tr>
    </table>
</body>

</html>