<!-- ============ Modal Update Visi =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="VisiModal_U<?= $no ?>" tabindex="-1" role="dialog"
    aria-labelledby="update_berita" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_berita">Update Visi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form-->
                    <div class="container">
                        <form action="/visi_update" method="POST" id="visi_update_<?= $no ?>">
                            <?= csrf_field(); ?>
                            <input hidden="true" name="id_visi" id="inputsm" type="text" value="<?= $v['id'] ?>"
                                form="visi_update_<?= $no ?>">
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <input class="form-control form-control-sm input-sm" name="visi" id="inputsm"
                                    type="text" value="<?= $v['visi'] ?>" placeholder="Visi Lengkap"
                                    form="visi_update_<?= $no ?>">
                            </div>
                            <button type="submit" style="width: 100%;" form="visi_update_<?= $no ?>"
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
<!-- ============ End Modal Update Visi =========== -->