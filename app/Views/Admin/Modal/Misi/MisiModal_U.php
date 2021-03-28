<!-- ============ Modal Update misi =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="MisiModal_U<?= $no ?>" tabindex="-1" role="dialog"
    aria-labelledby="update_berita" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_berita">Update misi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form-->
                    <div class="container">
                        <form action="/misi_update" method="POST" id="misi_update_<?= $no ?>">
                            <?= csrf_field(); ?>
                            <input hidden="true" name="id_misi" id="inputsm" type="text" value="<?= $m['id'] ?>"
                                form="misi_update_<?= $no ?>">
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <input class="form-control form-control-sm input-sm" name="misi" id="inputsm"
                                    type="text" value="<?= $m['misi'] ?>" placeholder="Misi Lengkap"
                                    form="misi_update_<?= $no ?>">
                            </div>
                            <button type="submit" style="width: 100%;" form="misi_update_<?= $no ?>"
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
<!-- ============ End Modal Update misi =========== -->