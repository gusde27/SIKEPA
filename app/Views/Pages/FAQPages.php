<?php $this->extend('layout/PagesLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>FAQ</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>FAQ</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= FAQ Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section class="faq inner-page">
        <div class="container">

            <div class="section-title">

                <h2>Frequently Asked Questions</h2>
                <p>Halaman Frequently Asked Questions ini bertujuan untuk membantu user menemukan pertanyaan pertanyaan
                    umum mengenai Sistem Informasi Kelurahan Pagesangan (SIKEPA).</p>
            </div>

            <div class="accordion-list">
                <ul>
                    <!-- Looping -->
                    <?php 
                    $n = 1;
                    foreach($faq as $f) : 
                    ?>
                    <li class="mb-3" data-aos="fade-up" data-aos-delay="<?= $n++ ?>00">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse"
                            href="#accordion-list<?= $n ?>" class="collapsed">
                            <?= $f['pertanyaan'] ?>
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list<?= $n ?>" class="collapse" data-parent=".accordion-list">
                            <p>
                                <?= $f['jawaban'] ?>
                            </p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                    <!-- End Looping -->

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= End FAQ Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>