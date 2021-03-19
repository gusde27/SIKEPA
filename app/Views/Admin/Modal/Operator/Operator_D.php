<!-- ======== Delete Modal Operator =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="operator_D<?= $no ?>" tabindex="-1" role="dialog"
    aria-labelledby="update_berita" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_berita">Delete Operator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form-->
                    <div class="container">
                        <form action="/operator_delete" method="POST" id="operator_delete_<?= $no ?>">
                            <?= csrf_field(); ?>
                            <input type="text" form="operator_delete_<?= $no ?>" name="id_operator"
                                value="<?= $user['id'] ?>" hidden="true" />
                            <div style="text-align: center;">
                                <h5>Apakah Anda Yakin?</h5>
                            </div>
                            <button type="submit" style="width: 100%;" form="operator_delete_<?= $no ?>"
                                class="mt-1 btn btn-danger btn-sm">Delete Data</button>
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
<!-- ======== End Delete Modal Operator =========== -->