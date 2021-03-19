<!-- ============ Modal Update Operator =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="operatorModal_U<?= $no ?>" tabindex="-1" role="dialog"
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
                        <form action="/pelayanan_update" method="POST" id="pelayanan_update_<?= $no ?>">
                            <?= csrf_field(); ?>
                            <input name="id_pelayanan" id="inputsm" type="text" value="<?= $p['id'] ?>" hidden="true"
                                form="pelayanan_update_<?= $no ?>">
                            <div class="form-group">
                                <label for="nama">Nama Pelayanan</label>
                                <input class="form-control form-control-sm input-sm" name="nama" id="inputsm"
                                    type="text" value="<?= $p['nama'] ?>" placeholder="Nama Pelayanan" required
                                    form="pelayanan_update_<?= $no ?>">
                            </div>
                            <div class="form-group">
                                <label for="syarat">Syarat</label>
                                <textarea class="form-control form-control-sm input-sm" name="syarat" id="syarat"
                                    form="pelayanan_update_<?= $no ?>" rows="6"><?= $p['syarat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control form-control-sm input-sm" name="deskripsi" id="deskripsi"
                                    form="pelayanan_update_<?= $no ?>" rows="6"><?= $p['deskripsi'] ?></textarea>
                            </div>
                            <button type="submit" style="width: 100%;" form="pelayanan_update_<?= $no ?>"
                                class="btn btn-primary btn-sm">Update</button>
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