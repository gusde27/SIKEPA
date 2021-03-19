<?php $this->extend('layout/PagesLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Artikel</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Artikel</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Artikel Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <h2>Artikel Terbaru</h2>
            </div>

            <?php foreach($artikel as $a) : ?>
            <a href="/artikel/<?= $a['slug'] ?>">
                <div class="card" style="color: black;">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="card">
                                    <div class="card-body p-1">
                                        <img src="assets/img/artikel/<?= $a['gambar'] ?>" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h5><b><?= $a['judul'] ?></b></h5>
                                <p><?= substr($a['deskripsi'], 0, 535) ?> ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>

        </div>
    </section>
    <!-- ======= End Artikel Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>