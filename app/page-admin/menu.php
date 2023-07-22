<?php
    $currentPage = isset($_GET['page']) ? $_GET['page'] : '';
?>
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item <?php echo $currentPage == 'dashboard' ? 'active' : ''; ?>">
            <a href="index.php?page=dashboard" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item has-sub <?php echo $currentPage == 'katalog-buku' ||  $currentPage == 'katalog-filter' || $currentPage == 'katalog-cari' || $currentPage == 'daftar-buku' || $currentPage == 'daftar-kategori' ? 'active' : ''; ?>">
            <a href="#" class="sidebar-link">
                <i class="fas fa-book"></i>
                <span>Buku</span>
            </a>

            <ul class="submenu">
                <li class="submenu-item <?php echo $currentPage == 'katalog-buku' || $currentPage == 'katalog-filter' || $currentPage == 'katalog-cari' ? 'active' : ''; ?>">
                    <a href="index.php?page=katalog-buku" class="submenu-link">Katalog Buku</a>
                </li>

                <li class="submenu-item <?php echo $currentPage == 'daftar-buku' ? 'active' : ''; ?>" >
                    <a href="index.php?page=daftar-buku" class="submenu-link">Daftar Buku</a>
                </li>

                <li class="submenu-item <?php echo $currentPage == 'daftar-kategori' ? 'active' : ''; ?>" >
                    <a href="index.php?page=daftar-kategori" class="submenu-link">Kategori Buku</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item has-sub <?php echo $currentPage == 'daftar-member' ? 'active' : ''; ?>">
            <a href="#" class="sidebar-link" >
                <i class="fas fa-users"></i>
                <span>Member</span>
            </a>

            <ul class="submenu">
                <li class="submenu-item <?php echo $currentPage == 'daftar-member' ? 'active' : ''; ?>" >
                    <a href="index.php?page=daftar-member" class="submenu-link">Daftar Member</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item <?php echo $currentPage == 'peminjaman' ? 'active' : ''; ?>">
            <a href="index.php?page=peminjaman" class="sidebar-link">
                <i class="fas fa-file-export"></i>
                <span>Peminjaman</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo $currentPage == 'pengembalian' ? 'active' : ''; ?>">
            <a href="index.php?page=pengembalian" class="sidebar-link">
                <i class="fas fa-file-import"></i>
                <span>Pengembalian</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo $currentPage == 'laporan' ? 'active' : ''; ?>">
            <a href="index.php?page=laporan" class="sidebar-link">
                <i class="fas fa-file"></i>
                <span>Laporan</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo $currentPage == 'kritik-saran' ? 'active' : ''; ?>">
            <a href="index.php?page=kritik-saran" class="sidebar-link">
                <i class="fas fa-user-edit"></i>
                <span>Kritik dan Saran</span>
            </a>
        </li>
        <!-- <li class="sidebar-item">
            <a href="includes/log-out.php" class="sidebar-link">
                <i class="fas fa-power-off"></i>
                <span>Log out</span>
            </a>
        </li> -->
    </ul>
</div>
</div>