<!-- ============ Modal Update Operator =========== -->
<!-- Modal -->
<div class="modal fade" style="color: none;" id="artikelModal_U<?= $no ?>" tabindex="-1" role="dialog"
    aria-labelledby="update_berita" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_berita">Update Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form-->
                    <div class="container">
                        <form action="/artikel_update" method="POST" id="artikel_update_<?= $no ?>"
                            enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-9">
                                    <input name="id_artikel" id="inputsm" type="text" value="<?= $a['id'] ?>"
                                        form="artikel_update_<?= $no ?>" hidden="true">
                                    <div class="form-group">
                                        <label for="nama">Judul</label>
                                        <input class="form-control form-control-sm input-sm" name="judul" id="inputsm"
                                            type="text" value="<?= $a['judul'] ?>" placeholder="Judul Artikel" required
                                            form="artikel_update_<?= $no ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control form-control-sm input-sm" name="deskripsi"
                                            id="deskripsi" form="artikel_update_<?= $no ?>"
                                            rows="6"><?= $a['deskripsi'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="assets/img/artikel/<?= $a['gambar'] ?>" width="100%">
                                            </div>
                                        </div>
                                        <input type="file" accept="image/x-png,image/jpg,image/jpeg"
                                            class="form-control-file input-sm" id="gambar" name="gambar"
                                            form="artikel_update_<?= $no ?>">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" style="width: 100%;" form="artikel_update_<?= $no ?>"
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