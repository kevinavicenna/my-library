<div class="modal fade" id="Update<?php echo $list_kategori['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Edit Data Member
                </h5>
            </div>

            <form method="GET" action="page-admin/kategori/kategori-update.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">ID Kategori</label>
                            <input type="text" class="form-control" name="id" id="basicInput" value="<?php echo $list_kategori['id_kategori']; ?>" placeholder="Masukkan ID Kategori" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" id="basicInput" value="<?php echo $list_kategori['nama_kategori']; ?>" placeholder="Masukkan Nama Kategori" required />
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