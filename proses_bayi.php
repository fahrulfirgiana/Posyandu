<?php
include 'koneksi.php';
$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->input_bayi(
        $_POST['kode'],
        $_POST['nama_anak'],
        $_POST['jeniskelamin'],
        $_POST['tanggal_lahir'],
        $_POST['berat_badan'],
        $_POST['nama_ayah'],
        $_POST['nama_ibu']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil disimpan');
        document.location='tblbayi.php';
        </script>";
} else if ($aksi == "delete") {
    $kode = $_GET['id'];
    $db->delete_bayi($kode);
    header('location: tblbayi.php');
} else if ($aksi == "update") {
    $db->update_bayi(
        $_POST['kode'],
        $_POST['nama_anak'],
        $_POST['jeniskelamin'],
        $_POST['tanggal_lahir'],
        $_POST['berat_badan'],
        $_POST['nama_ayah'],
        $_POST['nama_ibu']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil diupdate');
        document.location='tblbayi.php';
        </script>";
} else {
    echo "Database anada error silahkan kembali lagi
        <a href='index.php?'>klik disini</a>";
}
