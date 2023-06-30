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
    <h1 align="center"> Laporan Register Hasil Kegiatan</h1>
    <table class="table" border="1" width="100%">
        <thead>
            <tr class=" table table-danger">
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Bulan</th>
                <th scope="col">Ibu Hamil</th>
                <th scope="col">Diperiksa</th>
                <th scope="col">Ibu Menyusui</th>
                <th scope="col">Jumlah Balita</th>
                <th scope="col">Balita Yang Ditimbang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $db = new database();
            $data_laporan = $db->data_laporan();
            $no = 1;
            foreach ($data_laporan as $row) {
            ?>
                <tr class="table-light">
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['id_laporan']; ?></td>
                    <td><?= $row['bulan']; ?></td>
                    <td><?= $row['jml_ibuhamil']; ?></td>
                    <td><?= $row['diperiksa']; ?></td>
                    <td><?= $row['ibu_menyusui']; ?></td>
                    <td><?= $row['jml_balita']; ?></td>
                    <td><?= $row['jml_btimbang']; ?></td>
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