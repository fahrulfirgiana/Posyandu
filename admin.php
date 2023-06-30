<?php
ob_start();
session_start();

if (!isset($_SESSION['iduser'])) {
    die("<b>Oops!<b> Acces Failed.
    <p>Sistem Logout. Anda harus melakukan Login
    kembali.</p>
    <button type='button'
    onclick=location.href='./'>Back</button>");
}
if ($_SESSION['namauser'] != "admin") {
    die("<b>Oops!<b> Acces Failed.
    <p>Anda bukan Admin.</p>
    <button type='button'
    onclick=location.href='./'>Back</button>");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Posyandu - Desa Balagedog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/Majalengka.png" type="image/ico" />
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-11" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><i class="fa-solid fa-person-breastfeeding"></i><span class="text-secondary">POS</span>YANDU</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="admin.php" class="nav-item nav-link active">Home</a>
                        <a href="tblibu.php" class="nav-item nav-link">Reg Ibu Anak</a>
                    </div>
                    <a href="admin.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><i class="fa-solid fa-person-breastfeeding"></i> <span class="text-secondary">POS</span>YANDU</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="tblbayi.php" class="nav-item nav-link">Reg Anak</a>
                        <a href="tbl_laporan.php" class="nav-item nav-link">Hasil Laporan</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/anak.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="display-3 text-white mb-md-4">Ayo Jangan Ragu Ke</h4>
                        <h4 class="display-3 text-white mb-md-4">Posyandu!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <?php
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    switch ($queries['page']) {
        case 'tbl_barang':
            include 'tblbarang.php';
            break;
        case 'tambah':
            include 'tambah.php';
            break;
        case 'tbl_pemasok':
            include 'tblpemasok.php';
            break;
        case 'tambahpemasok':
            include  'tambahpemasok.php';
            break;
        case 'nilai':
            include 'nilai.php';
            break;
        case 'belanjabarang':
            include 'belanjabarang.php';
            break;
        case 'tbl_transaksi':
            include 'transaksi.php';
            break;
        default:
            #code...
            include 'home.php';
            break;
    }
    ?>




    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>