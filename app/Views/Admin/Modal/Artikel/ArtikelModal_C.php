<!-- ======= Operator Modal ======= -->

<!-- Modal -->
<div class="modal fade" id="artikelModal_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Pelayanan</h5>
                    <button type="button btn-sm" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Isi Modal -->
                <div class="modal-body" style="font-size: 14px;">
                    <div class="container">

                        <form method="POST" action="/artikel_tambah" id="artikelTambah" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Judul</label>
                                <input class="form-control form-control-sm input-sm" name="judul" id="inputsm"
                                    type="text" placeholder="Judul Artikel" required form="artikelTambah">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control form-control-sm input-sm" name="deskripsi" id="deskripsi"
                                    form="artikelTambah" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" accept="image/x-png,image/jpg,image/jpeg"
                                    class="form-control-file input-sm" id="gambar" name="gambar" form="artikelTambah">
                            </div>
                            <button type="submit" style="width: 100%;" form="artikelTambah"
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