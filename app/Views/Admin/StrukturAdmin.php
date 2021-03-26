<?php $this->extend('layout/AdminLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Struktur Organisasi</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Dashboard Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <h2>Struktur Organisasi</h2>
            </div>

            <!-- Konten -->

            <!-- alert -->
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-primary alert-dismissible fade show" style="font-size: 14px;" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <!-- end alert -->

            <div class="card">
                <div class="card-body">

                    <!-- Text Area -->
                    <form method="POST" action="/struktur_update" id="strukturUpdate">
                        <?php foreach($struktur as $s ) : ?>
                        <input type="text" name="id_struktur" value="<?= $s['id'] ?>" hidden="true">
                        <div class="form-group">
                            <textarea class="form-control form-control-sm input-sm" name="struktur" id="struktur"
                                form="strukturUpdate" rows="15"><?= $s['isi'] ?></textarea>
                        </div>
                        <?php endforeach; ?>
                        <button type="submit" style="width: 100%;" form="strukturUpdate"
                            class="btn btn-primary btn-sm">Update</button>
                    </form>
                    <!-- End Text Area -->

                </div>
            </div>
            <!-- End Konten -->

        </div>
    </section>
    <!-- ======= End Dashboard Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>