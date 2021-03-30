<!-- ======= FAQ Modal ======= -->

<!-- Modal -->
<div class="modal fade" id="FAQModal_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>FAQ</h5>
                    <button type="button btn-sm" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Isi Modal -->
                <div class="modal-body" style="font-size: 14px;">
                    <div class="container">

                        <form method="POST" action="/faq_tambah" id="faqTambah">
                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input class="form-control form-control-sm input-sm" name="pertanyaan" id="inputsm"
                                    type="text" placeholder="Pertanyaan" required form="faqTambah">
                            </div>
                            <div class="form-group">
                                <label for="jawaban">jawaban</label>
                                <textarea class="form-control form-control-sm input-sm" name="jawaban" id="jawaban"
                                    form="faqTambah" rows="6"></textarea>
                            </div>
                            <button type="submit" style="width: 100%;" form="faqTambah"
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
<!-- ======= End FAQ Modal ======= -->