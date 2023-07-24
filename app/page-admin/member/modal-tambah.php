<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Tambah Data Member
                </h5>
            </div>
            <form method="GET" action="page-admin/member/member-tambah.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">Username</label>
                            <input type="text" class="form-control" name="username" id="basicInput" placeholder="Masukkan Username" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Password</label>
                            <input type="password" class="form-control" name="password" id="basicInput" placeholder="Masukkan Password" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Nama</label>
                            <input type="text" class="form-control" name="nama" id="basicInput" placeholder="Masukkan Nama" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="basicInput" placeholder="Masukkan Alamat" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Nomor HP</label>
                            <input type="text" class="form-control" name="no_hp" id="basicInput" placeholder="Masukkan Nomor HP" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Pendaftaran</label>
                            <input type="date" name="tgl_daftar" class="form-control mb-3 flatpickr-no-config" placeholder="Masukkan Tanggal Pendaftaran."/>
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