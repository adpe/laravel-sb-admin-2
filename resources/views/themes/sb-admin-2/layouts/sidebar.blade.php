<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (strpos($view_name, 'dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    @guest
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (strpos($view_name, 'components')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse {{ (strpos($view_name, 'components')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item {{ (request()->is('buttons')) ? 'active' : '' }}" href="buttons">Buttons</a>
                <a class="collapse-item {{ (request()->is('cards')) ? 'active' : '' }}" href="cards">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ (strpos($view_name, 'utilities')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ (strpos($view_name, 'utilities')) ? 'show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item {{ (request()->is('colors')) ? 'active' : '' }}" href="colors">Colors</a>
                <a class="collapse-item {{ (request()->is('borders')) ? 'active' : '' }}" href="borders">Borders</a>
                <a class="collapse-item {{ (request()->is('animations')) ? 'active' : '' }}" href="animations">Animations</a>
                <a class="collapse-item {{ (request()->is('other')) ? 'active' : '' }}" href="other">Other</a>
            </div>
        </div>
    </li>
    @endguest

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Moodle Collapse Menu -->
    @auth
    <li class="nav-item {{ (strpos($view_path, 'moodle')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMoodle" aria-expanded="true" aria-controls="collapseMoodle">
            <i class="fas fa-fw fa-puzzle-piece"></i>
            <span>Moodle</span>
        </a>
        <div id="collapseMoodle" class="collapse {{ (strpos($view_path, 'plugins')) ? 'show' : '' }}" aria-labelledby="headingMoodle" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ (request()->is('plugins')) ? 'active' : '' }}" href="plugins">Plugins Overview</a>
            </div>
        </div>
    </li>
    @endauth
    @guest
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (strpos($view_name, 'pages')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse {{ (strpos($view_name, 'pages')) ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login">Login</a>
                <a class="collapse-item" href="register">Register</a>
                <a class="collapse-item" href="forgot-password">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item {{ (request()->is('404')) ? 'active' : '' }}" href="404">404 Page</a>
                <a class="collapse-item {{ (request()->is('blank')) ? 'active' : '' }}" href="blank">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (strpos($view_name, 'charts')) ? 'active' : '' }}">
        <a class="nav-link" href="charts">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ (strpos($view_name, 'tables')) ? 'active' : '' }}">
        <a class="nav-link" href="tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>
    @endguest

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
