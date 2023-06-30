<?php
include 'koneksi.php';
$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->input_laporan(
        $_POST['id_laporan'],
        $_POST['bulan'],
        $_POST['jml_ibuhamil'],
        $_POST['diperiksa'],
        $_POST['ibu_menyusui'],
        $_POST['jml_balita'],
        $_POST['jml_btimbang']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil disimpan');
        document.location='tbl_laporan.php';
        </script>";
} else if ($aksi == "delete") {
    $kode = $_GET['id'];
    $db->delete_laporan($kode);
    header('location: tbl_laporan.php');
} else if ($aksi == "update") {
    $db->update_laporan(
        $_POST['id_laporan'],
        $_POST['bulan'],
        $_POST['jml_ibuhamil'],
        $_POST['diperiksa'],
        $_POST['ibu_menyusui'],
        $_POST['jml_balita'],
        $_POST['jml_btimbang']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil diupdate');
        document.location='tbl_laporan.php';
        </script>";
} else {
    echo "Database anada error silahkan kembali lagi
        <a href='index.php?'>klik disini</a>";
}
