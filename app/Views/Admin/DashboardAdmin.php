<?php $this->extend('layout/AdminLayout'); ?>

<?php $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Dashboard</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Dashboard Section ======= -->
    <section class="inner-page">
        <div class="container">

            <div class="section-title">
                <h2>Wellcome <?= session()->get('nama') ?></h2>
            </div>

            <!-- Konten -->
            <div class="container">

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

                <div class="row">
                    <div class="col-md-7">
                        <!-- card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="section-title p-1">
                                    <p>Biodata</p>
                                </div>

                                <div style="font-size: 14px;">
                                    <!-- Konten -->
                                    <?php
                                        foreach($admin as $admin) :
                                     ?>
                                    <form action="/admin_update" method="POST" id="admin_update">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control form-control-sm input-sm" name="nama"
                                                id="inputsm" type="text" value="<?= $admin['nama'] ?>"
                                                placeholder="Nama Lengkap" form="admin_update">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input class="form-control form-control-sm input-sm" name="username"
                                                id="inputsm" type="text" value="<?= $admin['username'] ?>"
                                                placeholder="Username" form="admin_update">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control form-control-sm input-sm" name="password"
                                                id="inputsm" type="text" placeholder="Update Password"
                                                form="admin_update">
                                        </div>
                                        <button type="submit" style="width: 100%;" form="admin_update"
                                            class="btn btn-primary btn-sm">Update Data</button>
                                    </form>
                                    <?php endforeach; ?>
                                    <!-- End Konten -->
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-md-5">
                        <!-- card Operator -->
                        <div class="card">
                            <div class="card-body">
                                <div class="section-title p-1 mb-2">
                                    <p>Operator Website</p>
                                </div>

                                <button style="font-size: 10px;" type="button" class="btn p-1 btn-sm btn-primary"
                                    data-toggle="modal" data-target="#operator_C">
                                    Tambah Operator
                                </button>

                                <!-- modal tambah operator -->
                                <?php include('Modal/Operator/OperatorModal_C.php'); ?>
                                <!-- end modal tambah operator -->

                                <!-- Tables Operator -->
                                <div class="table-responsive" style="font-size: 12.5px;">
                                    <table id="datalol" class="table table-striped table-bordered mt-3"
                                        style="color:black;">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align:center;">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- looping -->
                                            <?php
                                            $no=1; 
                                            foreach($user as $user) :
                                             ?>
                                            <tr>
                                                <th scope="row" style="text-align: center;">
                                                    <?= $no++; ?>
                                                </th>
                                                <td><?= $user['nama']; ?></td>
                                                <td>
                                                    <button style="font-size: 10px;" type="button"
                                                        class="btn p-1 btn-sm btn-primary" data-toggle="modal"
                                                        data-target="#operator_U<?= $no ?>">
                                                        Update
                                                    </button>

                                                    <!-- ==== Modal Update Operator -->
                                                    <?php include('Modal/Operator/Operator_U.php'); ?>
                                                    <!-- ==== End Modal Update Operator -->

                                                    <button style="font-size: 10px;" type="button"
                                                        class="btn p-1 btn-sm btn-danger" data-toggle="modal"
                                                        data-target="#operator_D<?= $no ?>">
                                                        Delete
                                                    </button>

                                                    <!-- ==== Modal Update Operator -->
                                                    <?php include('Modal/Operator/Operator_D.php'); ?>
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
                        <!-- end card Operator -->
                    </div>
                </div>
            </div>
            <!-- End Konten -->

        </div>
    </section>
    <!-- ======= End Dashboard Section ======= -->

</main><!-- End #main -->
<?php $this->endSection(); ?>