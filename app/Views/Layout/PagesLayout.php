<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Kelurahan Pagesangan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Appland - v2.3.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
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

                    <li class="get-started"><a href="#login" data-toggle="modal" data-target="#LoginModal">Masuk</a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Login Modal ======= -->

    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>ADMIN SIKEPA</h5>
                        <button type="button btn-sm" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Isi Modal -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="assets/img/logo-mataram.png" alt="Logo Kota Mataram" width="100%">
                                </div>
                                <div class="col-sm-7">
                                    <form role="form" action="/loginPOST">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input class="form-control form-control-sm input-sm" name="username"
                                                id="inputsm" type="text" placeholder="Username"
                                                data-match="#inputUsername" data-match-error="Username don't match"
                                                required>
                                            <!-- Error -->
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control form-control-sm input-sm" name="password"
                                                id="inputsm" type="text" placeholder="Password"
                                                data-match="#inputPassword" data-match-error="Username don't match"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" style="width: 100%;"
                                                class="btn btn-primary btn-sm">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Isi Modal -->

                    <div class="modal-footer">
                        <!-- isi footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= End Login Modal ======= -->

    <!-- ======= Main ======= -->
    <?php $this->renderSection('content') ?>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>