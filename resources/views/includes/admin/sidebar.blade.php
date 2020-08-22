 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">

        <div class="sidebar-brand-text mx-3">Nikita Komputer</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Halaman Utama</span></a>
    </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
    <div class="sidebar-heading">
        Pendataan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('data-pembelian.index')}}">
            <i class="fas fa-shopping-cart"></i>
            <span>Data Pembelian</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{route('data-penjualan.index')}}">
        <i class="fas fa-calendar-check"></i>
            <span>Data Penjualan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola
    </div>

    <li class="nav-item">
    <a class="nav-link" href="{{route('kelola-barang.index')}}">
        <i class="fas fa-box-open"></i>
            <span>Data Barang</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('kelola-toko.index')}}">
        <i class="fas fa-store"></i>
            <span>Data Toko</span></a>
    </li>
</ul>
<!-- End of Sidebar -->