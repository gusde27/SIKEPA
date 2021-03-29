<!-- ======= galeri Modal ======= -->

<!-- Modal -->
<div class="modal fade" id="GaleriModal_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Galeri/h5>
                        <button type="button btn-sm" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <!-- Isi Modal -->
                <div class="modal-body" style="font-size: 14px;">
                    <div class="container">

                        <form method="POST" action="/galeri_tambah" id="galeriTambah" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="galeri">Gambar</label>
                                <input class="form-control form-control-sm input-sm" name="gambar" id="inputsm"
                                    type="file" placeholder="galeri" required form="galeriTambah">
                            </div>
                            <button type="submit" style="width: 100%;" form="galeriTambah"
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
<!-- ======= End galeri Modal ======= -->