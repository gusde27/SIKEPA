<?php $this->extend('layout/PagesLayout'); ?>

<?php $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up">
                <div>
                    <h1>Sistem Informasi Kelurahan Pagesangan</h1>
                    <h2>Kota Mataram, Nusa Tenggara Barat</h2>
                    <a href="/artikel" class="download-btn" s><i class="bx bxl-play-store"></i>Mulai</a>
                    <!--
    <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
    -->
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                data-aos="fade-up">
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<main id="main">
    <!-- ======= Visi Misi Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>Profil</h2>
                <p>
                    Sejarah Kelurahan Pagesangan dari zaman Pemerintahan Desa pada tahun 1969 sampai dengan 1980 yang
                    mana dulunya bernama Desa yang dipimpin oleh seorang kepala desa yang pertama bernama Sahman, Kedua
                    H. Abdul Jalil, Ketiga Suhaeli dan ke Empat Drs.H.Lalu Halil,dan pada tahun 1981 terbentuklah
                    Pemerintahan Kota Administratip Kota Mataram dengan perubahan Desa menjadi kelurahan yang dipimpin
                    seorang lurah pertama bernama Suhaeli dan yang kedua Drs. H.Lalu halil dengan 14 Kampung. pada tahun
                    2007 berdasarkan Peraturan Walikota Nomor : 18/PERT/2007 tentang Pemekaran Kecamatan dan Kelurahan
                    di Kota Mataram, dan kecamatan Mataram membawahi 9 Kelurahan, Kelurahan Pagesangan sebagai kelurahan
                    Induk Lurahnya bernama Drs. I Made Gede Yasa.MM sampai dengan Tahun 2016 terjadi pergantian Lurah
                    Ida Bagus Made Ariawan,S.STP. Adanya pemekaran wilayah ini dimaksudkan untuk efektifitas pelayanan
                    masyarakat dan mempermudah didalam melaksanakan program-program Pemerintah Daerah didalam hal
                    Pemberdayaan Masyarakat yang meliputi bidang politik, ekonomi, sosial budaya, dan lingkungan hidup,
                    Penyelenggaraan ketentraman dan ketertiban umum, serta Pemeliharaan prasarana dan fasilitas
                    pelayanan umum.
                </p>
            </div>


        </div>
    </section><!-- End Visi Misi Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="assets/img/details-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3>Visi</h3>
                    <ul>
                        <?php foreach($visi as $v) : ?>
                        <li><i class="icofont-check"></i>
                            <?= $v['visi'] ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/details-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Misi</h3>
                    <ul>
                        <?php foreach($misi as $m) : ?>
                        <li><i class="icofont-check"></i>
                            <?= $m['misi'] ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Details Section -->

    <!-- ======= Foto Kelurahan Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title">
                <h2>Foto Kelurahan</h2>
                <p>Galeri foto foto Kelurahan Pagesangan, Kota Mataram, Nusa Tenggara Barat.</p>
            </div>

            <div class="owl-carousel gallery-carousel" data-aos="fade-up">
                <?php foreach($galeri as $g) : ?>
                <a href="<?= base_url('assets/img/galeri/' . $g['gambar'] . '') ?>" class="venobox"
                    data-gall="gallery-carousel"><img
                        src="<?= base_url('assets/img/galeri/' . $g['gambar'] . '') ?>"></a>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Foto Kelurahan Section -->

</main>
<?php $this->endSection(); ?>