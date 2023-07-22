<div class="modal fade text-left modal-lg" id="View<?php echo $katalog['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel120">
                    Detail Buku
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img" style="height: 20rem;" src="assets/compiled/jpg/buku/<?php echo $katalog['cover']; ?>" alt="Card image cap" />
                    </div>
                    <div class="col-md-8">
                        <h4 class="card-title" ><?php echo $katalog['judul']; ?></h4>
                        <br>
                        <label>Penulis</label>
                        <h6><?php echo $katalog['penulis']; ?></h6>
                        <label>Penerbit</label>
                        <h6><?php echo $katalog['penerbit']; ?></h6>
                        <label>ISBN</label>
                        <h6><?php echo $katalog['isbn']; ?></h6>
                        <label>lokasi</label>
                        <h6> Rak <?php echo $katalog['rak']; ?></h6>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>