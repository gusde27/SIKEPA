<?php $this->extend('layout/PagesLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Artikel</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <?php foreach($artikel as $a) : ?>
                    <li><?= $a['judul'] ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Artikel Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <?php foreach($artikel as $a) : ?>
                <h2><?= $a['judul'] ?></h2>
                <?php endforeach; ?>
            </div>

            <?php foreach($artikel as $a) : ?>
            <div class="card" style="color: black;">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md">
                            <div class="mx-auto">
                                <div class="card">
                                    <div class="card-body p-1">
                                        <img class="img-fluid"
                                            src="<?= base_url('assets/img/artikel/' . $a['gambar'] . '') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md" style="white-space: pre-line;">
                            <p><?= $a['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </section>
    <!-- ======= End Artikel Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>