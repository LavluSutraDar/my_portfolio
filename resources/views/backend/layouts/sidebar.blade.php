<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('backend/img/1680368190453.png') }}" alt="" class="img-fluid" style="height: 70px">
        </div>
        <div class="sidebar-brand-text mx-3">Apurva Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{route('home.create')}}">Home Form</a>
                <a class="collapse-item" href="utilities-border.html">Home View</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-user"></i>
            <span>ABOUT
            </span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-tasks"></i>

            <span>Service</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-images"></i>

            <span>Work</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>BLOG</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-phone"></i>
            <span>CONTUCT</span></a>
    </li>
</ul>
