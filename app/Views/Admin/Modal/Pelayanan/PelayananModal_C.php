<!-- ======= Operator Modal ======= -->

<!-- Modal -->
<div class="modal fade" id="operatorModal_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
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

                        <form method="POST" action="/pelayanan_tambah" id="pelayananTambah">
                            <div class="form-group">
                                <label for="nama">Nama Pelayanan</label>
                                <input class="form-control form-control-sm input-sm" name="nama" id="inputsm"
                                    type="text" placeholder="Nama Pelayanan" required form="pelayananTambah">
                            </div>
                            <div class="form-group">
                                <label for="syarat">Syarat</label>
                                <textarea class="form-control form-control-sm input-sm" name="syarat" id="syarat"
                                    form="pelayananTambah" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control form-control-sm input-sm" name="deskripsi" id="deskripsi"
                                    form="pelayananTambah" rows="6"></textarea>
                            </div>
                            <button type="submit" style="width: 100%;" form="pelayananTambah"
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