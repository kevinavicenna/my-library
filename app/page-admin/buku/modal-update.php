<div class="modal fade" id="Update<?php echo $list_buku['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Edit Data Buku
                </h5>
            </div>

            <form method="POST" action="page-admin/buku/buku-update.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">Judul</label>
                            <input type="text" class="form-control" name="id" id="basicInput" value="<?php echo $list_buku['id_buku']; ?>" hidden required/>
                            <input type="text" class="form-control" name="judul" id="basicInput" value="<?php echo $list_buku['judul']; ?>" placeholder="Masukkan Judul" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="basicInput" value="<?php echo $list_buku['penulis']; ?>" placeholder="Masukkan Penulis" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="basicInput" value="<?php echo $list_buku['penerbit']; ?>" placeholder="Masukkan Penerbit" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Kategori</label>
                            <select class=".choices form-select" name='kategori' required>
                                <option value="">Pilih Kategori</option>
                                <?php
                                $query2 = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while ($list_kategori = mysqli_fetch_array($query2)) {
                                    if ($list_buku['id_kategoriFK'] == $list_kategori['id_kategori']) {
                                        echo "<option value='" . $list_kategori['id_kategori'] . "' selected>" . $list_kategori['nama_kategori'] . "</option>";
                                    } else {
                                        echo "<option value='" . $list_kategori['id_kategori'] . "'>" . $list_kategori['nama_kategori'] . "</option>";
                                    }
                                    ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ISBN</label>
                            <input type="text" class="form-control" name="isbn" id="basicInput" value="<?php echo $list_buku['isbn']; ?>" placeholder="Masukkan Nomor ISBN" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="basicInput" value="<?php echo $list_buku['jumlah']; ?>" placeholder=" Masukkan Jumlah" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Nomor Rak</label>
                            <input type="text" class="form-control" name="rak" id="basicInput" value="<?php echo $list_buku['rak']; ?>" placeholder="Masukkan Nomor Rak" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Upload Cover</label>
                            <input class="form-control" name="cover" type="file" id="formFile"/>
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