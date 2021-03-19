<?php $this->extend('layout/PagesLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pelayanan</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Pelayanan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Pelayanan Section ======= -->
    <section class="faq inner-page">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Daftar Pelayanan Kelurahan Pagesangan</h2>
            </div>

            <div class="accordion-list">
                <ul>
                    <?php 
                    $no = 1;
                    foreach($pelayanan as $p) : 
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                                    href="#accordion-list-<?= $p['id']; ?>"><?= $p['nama'] ?>
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-<?= $p['id']; ?>" class="collapse"
                                    data-parent=".accordion-list">
                                    <p>
                                        <b>Deskripsi</b>
                                    </p>
                                    <p>
                                        <?= $p['deskripsi'] ?>
                                    </p>
                                    <p>
                                        <b>Persyaratan</b>
                                    </p>
                                    <p>
                                        <?= $p['syarat'] ?>
                                    </p>
                                </div>
                            </li>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </section>
    <!-- ======= End Pelayanan Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>