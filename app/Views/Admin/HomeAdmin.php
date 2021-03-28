<?php $this->extend('layout/AdminLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Home Page</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Dashboard Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <h2>Home Page</h2>
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

            <!-- Card Visi -->
            <div class="card mb-3">
                <div class="card-body">

                    <button style="font-size: 12px;" type="button" class="btn p-1 mb-4 btn-sm btn-primary"
                        data-toggle="modal" data-target="#VisiModal_C">
                        Tambah Visi
                    </button>

                    <!-- modal tambah operator -->
                    <?php include('Modal/Visi/VisiModal_C.php'); ?>
                    <!-- end modal tambah operator -->

                    <!-- Table Visi -->
                    <div class="table-responsive" style="font-size: 14px;">
                        <table id="datalol" class="table table-striped table-bordered mt-3" style="color:black;">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">No</th>
                                    <th scope="col">Visi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- looping -->
                                <?php
                                    $no=1; 
                                    foreach($visi as $v) :
                                ?>
                                <tr>
                                    <th scope="row" style="text-align: center;">
                                        <?= $no++; ?>
                                    </th>
                                    <td>
                                        <?= $v['visi']; ?>
                                    </td>
                                    <td>
                                        <button style="font-size: 12px;" type="button"
                                            class="btn p-1 btn-sm btn-primary" data-toggle="modal"
                                            data-target="#VisiModal_U<?= $no ?>">
                                            Update
                                        </button>

                                        <!-- modal tambah operator -->
                                        <?php include('Modal/Visi/VisiModal_U.php'); ?>
                                        <!-- end modal tambah operator -->

                                        <button style="font-size: 12px;" type="button" class="btn p-1 btn-sm btn-danger"
                                            data-toggle="modal" data-target="#VisiModal_D<?= $no ?>">
                                            Delete
                                        </button>

                                        <!-- modal tambah operator -->
                                        <?php include('Modal/Visi/VisiModal_D.php'); ?>
                                        <!-- end modal tambah operator -->

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <!-- End looping -->
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table Visi -->

                </div>
            </div>
            <!-- End Card Visi -->
            <!-- Card Misi -->
            <div class="card mb-3">
                <div class="card-body">

                    <button style="font-size: 12px;" type="button" class="btn p-1 mb-4 btn-sm btn-primary"
                        data-toggle="modal" data-target="#MisiModal_C">
                        Tambah Misi
                    </button>

                    <!-- modal tambah operator -->
                    <?php include('Modal/Misi/MisiModal_C.php'); ?>
                    <!-- end modal tambah operator -->

                    <!-- Misi Table -->
                    <div class="table-responsive" style="font-size: 14px;">
                        <table id="datalol" class="table table-striped table-bordered mt-3" style="color:black;">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">No</th>
                                    <th scope="col">Misi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- looping -->
                                <?php
                                    $no=1; 
                                    foreach($misi as $m) :
                                ?>
                                <tr>
                                    <th scope="row" style="text-align: center;">
                                        <?= $no++; ?>
                                    </th>
                                    <td>
                                        <?= $m['misi']; ?>
                                    </td>
                                    <td>
                                        <button style="font-size: 12px;" type="button"
                                            class="btn p-1 btn-sm btn-primary" data-toggle="modal"
                                            data-target="#MisiModal_U<?= $no ?>">
                                            Update
                                        </button>

                                        <!-- modal tambah operator -->
                                        <?php include('Modal/Misi/MisiModal_U.php'); ?>
                                        <!-- end modal tambah operator -->

                                        <button style="font-size: 12px;" type="button" class="btn p-1 btn-sm btn-danger"
                                            data-toggle="modal" data-target="#MisiModal_D<?= $no ?>">
                                            Delete
                                        </button>

                                        <!-- modal tambah operator -->
                                        <?php include('Modal/Misi/MisiModal_D.php'); ?>
                                        <!-- end modal tambah operator -->

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <!-- End looping -->
                            </tbody>
                        </table>
                    </div>
                    <!-- End Misi Table -->

                </div>
            </div>
            <!-- End Card Misi -->
            <!-- Card Galeri -->
            <div class="card mb-3">
                <div class="card-body">

                    <!-- Text Area -->

                    <!-- End Text Area -->

                </div>
            </div>
            <!-- End Card Galeri -->

            <!-- End Konten -->

        </div>
    </section>
    <!-- ======= End Dashboard Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>