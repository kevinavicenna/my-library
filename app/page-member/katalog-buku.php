<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Katalog Buku</h3>
        <p class="text-subtitle text-muted">
          A sortable, searchable, paginated table without dependencies
          thanks to simple-datatables.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php?page=dasboard">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Buku</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Katalog Buku
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section id="content-types">
    <div class="row match-height">
      <?php
        $query = mysqli_query($koneksi, "SELECT * FROM buku");
        while ($katalog = mysqli_fetch_array($query)) {
      ?>
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="card">
            <div class="card-content">
              <div class="card-body">
                <img class="w-100 " src="assets/compiled/jpg/buku/<?php echo $katalog['cover']; ?>" alt="Card image cap" />
              </div> 
              <div class="card-body">
                  <p class="card-text"><?php echo $katalog['penulis']; ?></p>
                  <h5 class="card-title"><?php echo $katalog['judul']; ?></h5> 
              </div> 
            </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>
</div>