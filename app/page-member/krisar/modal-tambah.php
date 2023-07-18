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
                            <label for="basicInput">ID Kritik & Saran</label>
                            <input type="text" class="form-control" name="id" id="basicInput" placeholder="Masukkan ID Kritik & Saran" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ID Member</label>
                            <input type="text" class="form-control" name="username" id="basicInput" placeholder="Masukkan ID Member" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Kategori</label>
                            <input type="text" class="form-control" name="password" id="basicInput" placeholder="Masukkan Kategori" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">pesan</label>
                            <textarea class="form-control" name="nama" id="basicInput" placeholder="Masukkan Pesan" required ></textarea>
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