<div class="modal fade" id="Update<?php echo $list_pinjam['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Edit Data Pengembalian
                </h5>
            </div>
            <?php
                $query3 = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman = '".$list_pinjam['id_peminjaman']."'");
                $view = mysqli_fetch_array($query3);
            ?>

            <form method="GET" action="page-admin/pengembalian/pengembalian-update.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">Tanggal Pengembalian</label>
                            <input type="text" class="form-control" name="id_peminjaman" id="basicInput" value="<?php echo $view['id_peminjaman']; ?>" hidden required />
                            <input type="date" name="tgl_kembali" class="form-control mb-3 flatpickr-no-config" value="<?php echo $view['tgl_kembali']; ?>" placeholder="Masukkan Tanggal Pengembalian" required/>
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