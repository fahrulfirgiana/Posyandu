<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/print.css">
    <link rel="icon" href="img/Majalengka.png" type="image/ico" />
    <title>Posyandu - Desa Balagedog</title>
</head>

<body>
    <script>
        window.print()
    </script>
    <h1 align="center"> Laporan Register Ibu</h1>
    <table class="table" border="1" width="100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Ibu</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Nama Suami</th>
                <th scope="col">Nama Anak</th>
                <th scope="col">umur</th>
                <th scope="col">Berat Badan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $db = new database();
            $data_ibu = $db->data_ibu();
            $no = 1;
            foreach ($data_ibu as $row) {
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['kode']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['nama_ibu']; ?></td>
                    <td><?= $row['nama_ayah']; ?></td>
                    <td><?= $row['nama_anak']; ?></td>
                    <td><?= $row['umur']; ?></td>
                    <td><?= $row['beratbadan']; ?></td>
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
                <center>Majalengka, <?php echo date("d F Y") ?></center>
            </td>
        </tr>
        <tr>
            <td>
                <center>Pengurus</center>
                <br>
                <br>
                <p>Fahrul Firgiana M.kom S.kom</p>
            </td>
        </tr>
    </table>
</body>

</html>