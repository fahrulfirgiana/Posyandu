<?php
include 'koneksi.php';
$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->input_dibu(
        $_POST['kode'],
        $_POST['tanggal'],
        $_POST['nama_ibu'],
        $_POST['nama_ayah'],
        $_POST['nama_anak'],
        $_POST['umur'],
        $_POST['beratbadan']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil disimpan');
        document.location='tblibu.php';
        </script>";
} else if ($aksi == "delete") {
    $kode = $_GET['id'];
    $db->delete_dibu($kode);
    header('location: tblibu.php');
} else if ($aksi == "update") {
    $db->update_ibu(
        $_POST['kode'],
        $_POST['tanggal'],
        $_POST['nama_ibu'],
        $_POST['nama_ayah'],
        $_POST['nama_anak'],
        $_POST['umur'],
        $_POST['beratbadan']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil diupdate');
        document.location='tblibu.php';
        </script>";
} else {
    echo "Database anada error silahkan kembali lagi
        <a href='index.php?'>klik disini</a>";
}
