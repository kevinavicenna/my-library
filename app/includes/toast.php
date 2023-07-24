<script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/static/js/pages/sweetalert2.js"></script>

<?php
//  TOAST BUKU
if (isset($_GET['set-buku'])) {
  if ($_GET['set-buku'] == 1) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Buku telah ditambahkan'
              })
          </script>";
  } else if ($_GET['set-buku'] == 2) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Buku telah diperbaharui'
              })
          </script>";
  } else if ($_GET['set-buku'] == 3) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Buku telah terhapus'
              })
          </script>";
  }
}

//  TOAST KATEOORI
if (isset($_GET['set-kategori'])) {
  if ($_GET['set-kategori'] == 1) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Kategori telah ditambahkan'
              })
          </script>";
  } else if ($_GET['set-kategori'] == 2) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Kategori telah diperbaharui'
              })
          </script>";
  } else if ($_GET['set-kategori'] == 3) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Kategori telah terhapus'
              })
          </script>";
  }
}

//  TOAST MEMBER
else if (isset($_GET['set-member'])) {
  if ($_GET['set-member'] == 1) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Member telah ditambahkan'
              })
          </script>";
  } else if ($_GET['set-member'] == 2) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Member telah diperbaharui'
              })
          </script>";
  } else if ($_GET['set-member'] == 3) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Member telah terhapus'
              })
          </script>";
  } else if ($_GET['set-member'] == 4) {
    echo "
            <script>
                Toast.fire({
                    icon: 'error',
                    title: 'Username sudah digunakan'
                })
            </script>";
  }
}

//  TOAST PINJAM
else if (isset($_GET['set-pinjam'])) {
  if ($_GET['set-pinjam'] == 1) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Peminjaman telah ditambahkan'
              })
          </script>";
  } else if ($_GET['set-pinjam'] == 2) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Peminjaman telah diperbaharui'
              })
          </script>";
  } else if ($_GET['set-pinjam'] == 3) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Peminjaman telah terhapus'
              })
          </script>";
  } else if ($_GET['set-pinjam'] == 4) {
    echo "
          <script>
              Toast.fire({
                  icon: 'error',
                  title: 'Data buku tidak ditemukan'
              })
          </script>";
  } else if ($_GET['set-pinjam'] == 5) {
    echo "
          <script>
              Toast.fire({
                  icon: 'error',
                  title: 'Data member tidak ditemukan'
              })
          </script>";
  }
}

//  TOAST KEMBALI
else if (isset($_GET['set-kembali'])) {
  if ($_GET['set-kembali'] == 1) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Buku telah dikembalikan'
              })
          </script>";
  } else if ($_GET['set-kembali'] == 2) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Pengembalian telah diperbaharui'
              })
          </script>";
  } else if ($_GET['set-kembali'] == 3) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Pengembalian telah terhapus'
              })
          </script>";
  } else if ($_GET['set-kembali'] == 4) {
    echo "
          <script>
              Toast.fire({
                  icon: 'error',
                  title: 'Data peminjaman tidak ditemukan'
              })
          </script>";
  }
}

// TOAST KRISAR
else if (isset($_GET['set-krisar'])) {
  if ($_GET['set-krisar'] == 1) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Pesan telah tersampaikan'
              })
          </script>";
  } else if ($_GET['set-krisar'] == 2) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Pesan telah diperbaharui'
              })
          </script>";
  } else if ($_GET['set-krisar'] == 3) {
    echo "
          <script>
              Toast.fire({
                  icon: 'success',
                  title: 'Pesan telah terhapus'
              })
          </script>";
  }
}
?>