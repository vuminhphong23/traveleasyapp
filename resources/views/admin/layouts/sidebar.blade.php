<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="{{route('index')}}"><img src="{{ asset('assets/images/logo_web.png') }}" alt="logo" style="width: 170px;height: 70px;margin-bottom: 10px;" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{route('index')}}"><img src="{{ asset('assets/images/logo_mini.png') }}" alt="logo" /></a>
    </div>
    <br><br>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.tours.index') }}">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Tours</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.bookings.index') }}">
                <i class="mdi mdi-cart menu-icon"></i>
                <span class="menu-title">Bookings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.hotels.index') }}">
                <i class="mdi mdi-hotel menu-icon"></i>
                <span class="menu-title">Hotels</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.tourguides.index') }}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Tour Guide</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.vehicles.index') }}">
                <i class="mdi mdi-car menu-icon"></i>
                <span class="menu-title">Vehicle</span>
            </a>
        </li>
        <li>
            <div style="height: 300px;"></div>
        </li>
        <li class="nav-item" style="font-size: 19px;">
            <a class="nav-link"  href="{{route('logout_up')}}">
                <i class="mdi mdi-logout"></i>
                <span class="menu-title">Sign Out</span> 
            </a>
        </li>
    </ul>

       
</nav>
