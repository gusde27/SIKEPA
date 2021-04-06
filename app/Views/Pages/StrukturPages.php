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
                <h2>Susunan Organisasi</h2>
            </div>

            <p style="white-space: pre-line;">
                <?php foreach($struktur as $s): ?>
                <img class="img-fluid mb-3" src="assets/img/struktur/<?= $s['isi'] ?>" alt="Struktur Organisasi">
                <?php endforeach; ?>
            </p>

        </div>
    </section>
    <!-- ======= End Struktur Organisasi Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>