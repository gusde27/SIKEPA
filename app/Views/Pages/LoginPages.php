<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Kelurahan Pagesangan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header-transparent mb-3">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html">SIKEPA</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/struktur-organisasi">Struktur Organisasi</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li><a href="/pelayanan">Pelayanan</a></li>
                    <li><a href="/faq">F.A.Q</a></li>

                    <!--
                    <li class="get-started"><a href="#login" data-toggle="modal" data-target="#LoginModal">Masuk</a>
                    </li>
                    -->
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    <!-- ======= Main ======= -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="<?= base_url('assets/img/logo-mataram.png') ?>" alt="Logo Kota Mataram" width="100%">
                    </div>
                    <div class="col-sm-10">

                        <!-- alert -->
                        <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary alert-dismissible fade show" style="font-size: 12px;"
                            role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
                        <!-- end alert -->

                        <form action="/loginpost" method="POST" id="login">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control form-control-sm input-sm" name="username" id="inputsm"
                                    type="text" placeholder="Username" form="login" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-sm input-sm" name="password" id="inputsm"
                                    type="password" placeholder="Password" form="login" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" style="width: 100%;" class="btn btn-primary btn-sm"
                                    form="login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ======= End Main ======= -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!--
        <div class="footer-newsletter" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        -->

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
                        <h3>SIKEPA</h3>
                        <p>
                            Jl. Guru Bangkol No.1 <br>
                            Pagesangan<br>
                            Kota Mataram<br><br>
                            <strong>Phone:</strong> (0370) 631541<br>
                            <strong>Email:</strong> - <br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Struktur Organisasi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">F.A.Q</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                        <h4>Pelayanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Surat Keterangan Usaha</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Surat Keterangan Pindah</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Surat Keterangan Kelahiran</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Surat Keterangan Haji</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">DLL</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                        <h4>Sosial Media</h4>
                        <p>Sosial Media Kelurahan Pagesangan, Kota Mataram, Nusa Tenggara Barat</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>SIKEPA</span></strong>.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                Developed by <a href="https://instagram.com/guusdee_">Gusde Wirawan</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>