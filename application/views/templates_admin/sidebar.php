<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car fa-fw"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rental Mobil WP2</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('admin/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/data_mobil')?>">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Mobil</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/data_customer')?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Customer</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/input_tr')?>">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Input Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/transaksi')?>">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/laporan')?>">
            <i class="fas fa-fw fa-paperclip"></i>
            <span>Laporan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('auth/logout')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->