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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
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


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 30px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Input Data Ibu</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="admin.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">About</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container">
        <div class="kol">
            <br>
            <h2>Input Data</h2>
            <br>
            <form method="POST" action="<?php echo "proses_ibu.php?aksi=tambah"; ?>">
                <div class="mb-3">
                    <label class="form-label">ID IBU</label>
                    <input type="input" class="form-control" id="" name="kode">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="" name="tanggal">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ibu</label>
                    <input type="input" class="form-control" id="" name="nama_ibu">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Suami</label>
                    <input type="input" class="form-control" id="" name="nama_ayah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Anak</label>
                    <input type="input" class="form-control" id="" name="nama_anak">
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="input" class="form-control" id="" name="umur">
                </div>
                <div class="mb-3">
                    <label class="form-label">Berat Badan</label>
                    <input type="input" class="form-control" id="" name="beratbadan">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan Data">
                    <input type="reset" class="btn btn-secondary btn-sm" value="Reset">
                </div>
            </form>
        </div>
    </div>
    <!-- Tabel -->
    <!-- Footer Start -->
    <div class="bg-light">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">POS</span>YANDU</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Alamat</h5>
                            <p class="mb-2">Jl. Rajagaluh, Ds. Balagedog</p>
                            <p class="mb-0">Majalengka, Jawa Barat</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Hubungi</h5>
                            <p class="mb-2">Elisa Suci Maharani</p>
                            <p class="mb-0">083 653 654 654</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p>Copyright &copy; Your Website <?php echo date("d F Y"); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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