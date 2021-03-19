<!-- ======= Operator Modal ======= -->

<!-- Modal -->
<div class="modal fade" id="operator_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Operator</h5>
                    <button type="button btn-sm" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Isi Modal -->
                <div class="modal-body" style="font-size: 14px;">
                    <div class="container">

                        <form method="POST" action="/operator_tambah" id="operatorTambah">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control form-control-sm input-sm" name="nama" id="inputsm"
                                    type="text" placeholder="Nama Lengkap" data-match="#inputNama"
                                    data-match-error="Nama don't match" required form="operatorTambah">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control form-control-sm input-sm" name="username" id="inputsm"
                                    type="text" placeholder="Username" required form="operatorTambah">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-sm input-sm" name="password" id="inputsm"
                                    type="text" placeholder="Password" required form="operatorTambah">
                            </div>
                            <button type="submit" style="width: 100%;" form="operatorTambah"
                                class="btn btn-primary btn-sm">Tambah</button>
                        </form>

                    </div>
                </div>
                <!-- End Isi Modal -->

                <div class="modal-footer">
                    <!-- isi footer -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= End Operator Modal ======= -->