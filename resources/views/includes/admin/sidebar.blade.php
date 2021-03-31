 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        
        <div class="sidebar-brand-text mx-3">Kemahasiswaan UNU Jogja</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('prestation.index')}}">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Prestasi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('complaint.index')}}">
            <i class="fas fa-fw fas fa-comments"></i>
            <span>Layanan</span></a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link" href="{{ route('organization.index')}}">
            <i class="fas fa-fw fas fa-users"></i>
            <span>Ormawa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fas fa-globe"></i>
            <span>Blogger</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fas fa-calendar-check"></i>
            <span>Events</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Assets Ormawa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Ormawa:</h6>
                <a class="collapse-item" href="{{ route('ukm.index')}}">UKM</a>
                <a class="collapse-item" href="{{ route('hmp.index')}}">HMP</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->