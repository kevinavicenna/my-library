<div class="modal fade" id="Update<?php echo $list_pinjam['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Edit Data Peminjaman
                </h5>
            </div>
            <?php
                $query3 = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman = '".$list_pinjam['id_peminjaman']."'");
                $view = mysqli_fetch_array($query3);
            ?>

            <form method="GET" action="page-admin/peminjaman/peminjaman-update.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">ID Buku</label>
                            <input type="text" class="form-control" name="id" id="basicInput" value="<?php echo $view['id_peminjaman']; ?>" hidden required />
                            <input type="text" class="form-control" name="id_buku" id="basicInput" value="<?php echo $view['id_bukuFK']; ?>" placeholder="Masukkan ID Buku" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ID Member</label>
                            <input type="text" class="form-control" name="id_member" id="basicInput" value="<?php echo $view['id_memberFK']; ?>" placeholder="Masukkan ID Member" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_pinjam" class="form-control mb-3 flatpickr-no-config" value="<?php echo $view['tgl_pinjam']; ?>" placeholder="Masukkan Tanggal Peminjaman."/>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Jatuh Tempo</label>
                            <input type="date" name="tgl_jatuh_tempo" class="form-control mb-3 flatpickr-no-config" value="<?php echo $view['tgl_jatuh_tempo']; ?>" placeholder="Masukkan Tanggal Peminjaman."/>
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