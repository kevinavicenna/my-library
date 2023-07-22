<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Tambah Data Member
                </h5>
            </div>
            <form method="GET" action="page-member/krisar/krisar-tambah.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">Kategori</label>
                            <select class=".choices form-select" name='kategori' required>
                                <option value="">Pilih Kategori</option>
                                <option value="Kritik">Kritik</option>
                                <option value="Saran">Saran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Pesan</label>
                            <textarea class="form-control" name="pesan" id="pesan" placeholder="Masukkan Pesan" required ></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>