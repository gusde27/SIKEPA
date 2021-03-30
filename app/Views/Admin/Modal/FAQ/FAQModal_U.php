<!-- ============ Modal Update FAQ =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="FAQModal_U<?= $no ?>" tabindex="-1" role="dialog"
    aria-labelledby="update_berita" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_berita">Update FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form-->
                    <div class="container">
                        <form action="/faq_update" method="POST" id="faq_update_<?= $no ?>">
                            <?= csrf_field(); ?>
                            <input name="id_faq" id="inputsm" type="text" value="<?= $f['id'] ?>" hidden="true"
                                form="faq_update_<?= $no ?>">
                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input class="form-control form-control-sm input-sm" name="pertanyaan" id="inputsm"
                                    type="text" value="<?= $f['pertanyaan'] ?>" placeholder="Pertanyaan" required
                                    form="faq_update_<?= $no ?>">
                            </div>
                            <div class="form-group">
                                <label for="jawaban">Jawaban</label>
                                <textarea class="form-control form-control-sm input-sm" name="jawaban" id="jawaban"
                                    form="faq_update_<?= $no ?>" rows="6"><?= $f['jawaban'] ?></textarea>
                            </div>
                            <button type="submit" style="width: 100%;" form="faq_update_<?= $no ?>"
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
<!-- ============ End Modal Update FAQ =========== -->