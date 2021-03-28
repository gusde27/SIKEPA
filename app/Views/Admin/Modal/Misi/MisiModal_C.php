<!-- ======= Visi Modal ======= -->

<!-- Modal -->
<div class="modal fade" id="VisiModal_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Visi</h5>
                    <button type="button btn-sm" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Isi Modal -->
                <div class="modal-body" style="font-size: 14px;">
                    <div class="container">

                        <form method="POST" action="/visi_tambah" id="visiTambah">
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <input class="form-control form-control-sm input-sm" name="visi" id="inputsm"
                                    type="text" placeholder="Visi" required form="visiTambah">
                            </div>
                            <button type="submit" style="width: 100%;" form="visiTambah"
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
<!-- ======= End Visi Modal ======= -->