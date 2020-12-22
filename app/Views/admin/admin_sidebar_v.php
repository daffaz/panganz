<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('SangatRahasia') ?>">
        <h1 class="font-weight-bold">P</h1>
        <div class="sidebar-brand-text">anganZ Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('SangatRahasia') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Articles
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('SangatRahasia/adminArtikelTrending') ?>">
            <i class="far fa-newspaper"></i>
            <span>Manage artikel trending</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('SangatRahasia/adminArtikelTerkini') ?>">
            <i class="far fa-newspaper"></i>
            <span>Manage artikel terkini</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('SangatRahasia/adminArtikelLawas') ?>">
            <i class="far fa-newspaper"></i>
            <span>Manage artikel lawas</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Events
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('SangatRahasia/adminAcara') ?>">
            <i class="fas fa-calendar-week"></i>
            <span>Manage acara</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>


<!-- End of Sidebar -->