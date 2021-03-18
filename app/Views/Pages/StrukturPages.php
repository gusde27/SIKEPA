<?php $this->extend('layout/PagesLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Struktur Organisasi</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Struktur Organisasi</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Struktur Organisasi Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <h3>Susunan Organisasi</h3>
            </div>

            <p>
                Kantor Lurah Pagesangan dipimpin oleh seorang Lurah kemudian dibawahnya terdiri dari Seklur, Kasi
                Pemerintahan, Kasi Ekonomi, Fisik, Sarana dan Prasarana, Kasi Sosial dan Pemberdayaan Masyarakat serta
                staf.
                Jumlah Pegawai Kantor Lurah Pagesangan berjumlah 11 orang terdiri dari :
            <ul>
                <li>Lurah : 1 Orang</li>
                <li>Sekretaris : 1 Orang</li>
                <li>Kasi : 2 Orang</li>
                <li>Staf PNS : 2 Orang</li>
                <li>Staf Honorer : 3 Orang</li>
                <li>Babinmaspol : 1 Orang</li>
                <li>Babinsa : 1 Orang</li>
            </ul>
            </p>

            <form role="form">
                <div class="form-group">
                    <label for="inputsm">input-sm</label>
                    <input class="form-control form-control-sm input-sm" id="inputsm" type="text">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </form>

        </div>
    </section>
    <!-- ======= End Struktur Organisasi Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>