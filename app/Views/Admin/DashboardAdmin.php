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
                <h2>Wellcome Admin!</h2>
            </div>

            <!-- Konten -->
            <div class="container">
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
                                    <form action="/">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control form-control-sm input-sm" name="nama"
                                                id="inputsm" type="text" placeholder="Nama" data-match="#inputnama"
                                                data-match-error="nama don't match" required>
                                            <!-- Error -->
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input class="form-control form-control-sm input-sm" name="username"
                                                id="inputsm" type="text" placeholder="Username"
                                                data-match="#inputUsername" data-match-error="Username don't match"
                                                required>
                                            <!-- Error -->
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control form-control-sm input-sm" name="password"
                                                id="inputsm" type="text" placeholder="Password"
                                                data-match="#inputPassword" data-match-error="Username don't match"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                        </div>
                                    </form>
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
                                                    <?= $no; ?>
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
                                                        data-target="#operator_D">
                                                        Delete
                                                    </button>
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