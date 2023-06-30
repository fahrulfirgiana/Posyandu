<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $nama_db = "posyanduu";
    var $koneksi = "";


    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->nama_db);
    }
    function data_ibu()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $data_ibu = mysqli_query(
                $this->koneksi,
                "SELECT * FROM tblibu JOIN tblbayi ON tblibu.kode=tblbayi.kode
                where tblibu.kode like '%" . $cari . "%' OR tblbayi.nama_ibu like '%" . $cari . "%'"
            );
            while ($row = mysqli_fetch_array($data_ibu)) {
                $hasil_ibu[] = $row;
            }
            return $hasil_ibu;
        } else {
            $data_ibu = mysqli_query(
                $this->koneksi,
                "SELECT * FROM tblibu JOIN tblbayi ON tblibu.kode=tblbayi.kode;"
            );
            while ($row = mysqli_fetch_array($data_ibu)) {
                $hasil_ibu[] = $row;
            }
            return $hasil_ibu;
        }
    }
    function input_dibu($kode, $tanggal, $namaibu, $namaayah, $namaanak, $umur, $berat)
    {
        mysqli_query($this->koneksi, "insert into tblibu values ('$kode','$tanggal','$namaibu','$namaayah','$namaanak','$umur','$berat')");
    }

    function login_user($username, $password)
    {
        $pass = mysqli_real_escape_string($this->koneksi, md5($password));
        $un = mysqli_real_escape_string($this->koneksi, $username);
        $data = mysqli_query($this->koneksi, "select * from tbl_user where
        username='$un' and password='$pass'");
        $row = mysqli_num_rows($data);

        if ($row > 0) {
            $cek = mysqli_fetch_assoc($data);
            if ($cek['level'] == "admin") {
                session_start();
                $_SESSION['namauser'] = $cek['username'];
                $_SESSION['passuser'] = $cek['password'];
                $_SESSION['iduser'] = $cek['id_user'];
                $_SESSION['nm'] = $cek['nama'];
                $_SESSION['l'] = $cek['level'];
                echo  "<script language = 'javascript'>
                alert('Berhasil Login Ke Halaman Login');
                document.location='admin.php';
                </script>";
            } else {
                echo  "<script language = 'javascript'>
                alert('Gagal Login');
                document.location='index.php?pesan=Gagallogin';
                </script>";
            }
        }
    }

    //delete data Ibu
    function delete_dibu($kode)
    {
        $query = mysqli_query($this->koneksi, "Delete from tblibu where kode = '$kode'");
    }
    function tampil_ibu($kode)
    {
        $query = mysqli_query($this->koneksi, "select *from tblibu where kode = '$kode'");
        return $query->fetch_array();
    }
    function update_ibu($kode, $tanggal, $namaibu, $namaayah, $namaanak, $umur, $berat)
    {
        $query = mysqli_query($this->koneksi, "update tblibu set tanggal ='$tanggal',nama_ibu = '$namaibu',nama_ayah = '$namaayah',nama_anak ='$namaanak',umur ='$umur',beratbadan ='$berat' where kode='$kode'");
    }

    // Data Bayi/Anak
    function data_bayi()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            return mysqli_query(
                $this->koneksi,
                "SELECT * FROM tblibu JOIN tblbayi ON tblibu.kode=tblbayi.kode
                where tblbayi.kode like '%" . $cari . "%' OR tblbayi.nama_anak like '%" . $cari . "%'"
            );
            // while ($row = mysqli_fetch_array($data_bayi)) {
            //     $hasil_bayi[] = $row;
            // }
            // return $hasil_bayi;
        } else {
            return mysqli_query(
                $this->koneksi,
                // "SELECT * FROM tblibu JOIN tblbayi ON tblibu.kode=tblbayi.kode;"
                "SELECT * FROM tblbayi"
            );
        }
    }
    function input_bayi($kode, $nama_anak, $jeniskelamin, $tanggal_lahir, $berat_badan, $nama_ayah, $nama_ibu)
    {
        mysqli_query($this->koneksi, "insert into tblbayi values ('$kode','$nama_anak','$jeniskelamin','$tanggal_lahir','$berat_badan','$nama_ayah','$nama_ibu')");
    }

    //delete data
    function delete_bayi($kode)
    {
        $query = mysqli_query($this->koneksi, "Delete from tblbayi where kode = '$kode'");
    }
    function tampil_bayi($kode)
    {
        $query = mysqli_query($this->koneksi, "select *from tblbayi where kode = '$kode'");
        return $query->fetch_array();
    }
    function update_bayi($kode, $nama_anak, $jeniskelamin, $tanggal_lahir, $berat_badan, $nama_ayah, $nama_ibu)
    {
        $query = mysqli_query($this->koneksi, "update tblbayi set nama_anak ='$nama_anak',jeniskelamin = '$jeniskelamin',tanggal_lahir = '$tanggal_lahir',nama_ayah ='$nama_ayah',nama_ibu ='$nama_ibu'where kode='$kode'");
    }

    // Data Hasil Laporan
    function data_laporan()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $query = "SELECT * FROM tbl_laporan where tbl_laporan.id_laporan like '%$cari%' OR tbl_laporan.bulan like '%$cari%'";
        } else {
            $query = "SELECT * FROM tbl_laporan";
        }
        return mysqli_query($this->koneksi, $query);
    }
    function input_laporan($kode, $bulan, $jml_ibuhamil, $diperiksa, $ibu_menyusui, $jml_balita, $jml_btimbang)
    {
        mysqli_query($this->koneksi, "insert into tbl_laporan values ('$kode','$bulan','$jml_ibuhamil','$diperiksa','$ibu_menyusui','$jml_balita','$jml_btimbang')");
    }

    //delete data
    function delete_laporan($kode)
    {
        $query = mysqli_query($this->koneksi, "Delete from tbl_laporan where id_laporan = '$kode'");
    }
    function tampil_laporan($kode)
    {
        $query = mysqli_query($this->koneksi, "select *from tbl_laporan where id_laporan = '$kode'");
        return $query->fetch_array();
    }
    function update_laporan($kode, $bulan, $jml_ibuhamil, $diperiksa, $ibu_menyusui, $jml_balita, $jml_btimbang)
    {
        $query = mysqli_query($this->koneksi, "update tbl_laporan set bulan ='$bulan',jml_ibuhamil = '$jml_ibuhamil',diperiksa = '$diperiksa',ibu_menyusui ='$ibu_menyusui',jml_balita ='$jml_balita',jml_btimbang ='$jml_btimbang' where id_laporan='$kode'");
    }
}
