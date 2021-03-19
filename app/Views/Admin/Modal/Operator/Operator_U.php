<!-- ============ Modal Update Operator =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="operator_U<?= $no ?>" tabindex="-1" role="dialog"
    aria-labelledby="update_berita" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_berita">Update Operator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form-->
                    <div class="container">
                        <form action="/operator_update" method="POST" id="operator_update_<?= $no ?>">
                            <?= csrf_field(); ?>
                            <input hidden="true" name="id" id="inputsm" type="text" value="<?= $user['id'] ?>"
                                form="operator_update_<?= $no ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control form-control-sm input-sm" name="nama" id="inputsm"
                                    type="text" value="<?= $user['nama'] ?>" placeholder="Nama Lengkap"
                                    form="operator_update_<?= $no ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control form-control-sm input-sm" name="username" id="inputsm"
                                    type="text" value="<?= $user['username'] ?>" placeholder="Username"
                                    form="operator_update_<?= $no ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-sm input-sm" name="password" id="inputsm"
                                    type="text" placeholder="Update Password" form="operator_update_<?= $no ?>">
                            </div>
                            <button type="submit" style="width: 100%;" form="operator_update_<?= $no ?>"
                                class="btn btn-primary btn-sm">Update Data</button>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
                <!-- Tutup isi form -->
            </div>
        </div>
    </div>
</div>
<!-- ============ End Modal Update Operator =========== -->