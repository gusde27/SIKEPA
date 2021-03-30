<?php $this->extend('layout/AdminLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>FAQ</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Dashboard Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <h2>Daftar F.A.Q</h2>
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
                    <div class="section-title p-1 mb-2">
                        <p>Tabel FAQ</p>
                    </div>

                    <button style="font-size: 12px;" type="button" class="btn p-1 mb-4 btn-sm btn-primary"
                        data-toggle="modal" data-target="#FAQModal_C">
                        Tambah FAQ
                    </button>

                    <!-- modal tambah operator -->
                    <?php include('Modal/FAQ/FAQModal_C.php'); ?>
                    <!-- end modal tambah operator -->

                    <!-- Tables Operator -->
                    <div class="table-responsive" style="font-size: 14px;">
                        <table id="datalol" class="table table-striped table-bordered mt-3" style="color:black;">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">No</th>
                                    <th scope="col">Pertanyaan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- looping -->
                                <?php
                                            $no=1; 
                                            foreach($faq as $f) :
                                             ?>
                                <tr>
                                    <th scope="row" style="text-align: center;">
                                        <?= $no++; ?>
                                    </th>
                                    <td>
                                        <?= $f['pertanyaan']; ?>
                                    </td>
                                    <td>
                                        <button style="font-size: 12px;" type="button"
                                            class="btn p-1 btn-sm btn-primary" data-toggle="modal"
                                            data-target="#FAQModal_U<?= $no ?>">
                                            Update
                                        </button>

                                        <!-- ==== Modal Update Operator -->
                                        <?php include('Modal/FAQ/FAQModal_U.php'); ?>
                                        <!-- ==== End Modal Update Operator -->

                                        <button style="font-size: 12px;" type="button" class="btn p-1 btn-sm btn-danger"
                                            data-toggle="modal" data-target="#FAQModal_D<?= $no ?>">
                                            Delete
                                        </button>

                                        <!-- ==== Modal Update Operator -->
                                        <?php include('Modal/FAQ/FAQModal_D.php'); ?>
                                        <!-- ==== End Modal Update Operator -->

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <!-- End looping -->
                            </tbody>
                        </table>
                    </div>
                    <!-- tutup Tables -->
                </div>
            </div>
            <!-- End Konten -->

        </div>
    </section>
    <!-- ======= End Dashboard Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>