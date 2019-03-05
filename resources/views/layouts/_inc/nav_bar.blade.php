<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../images/logo-mini.svg" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
            <li class="nav-item">
                <a href="#" class="nav-link">Schedule
                    <span class="badge badge-primary ml-1">New</span>
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-elevation-rise"></i>Reports</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-xl-inline-block">
                <router-link class="nav-link" to="/setting">
                    <i class="menu-icon mdi mdi-settings"></i>
                    <span class="profile-text">Setting</span>
                </router-link>
            </li>
            <li class="nav-item d-none d-xl-inline-block">
                <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="menu-icon mdi mdi-logout"></i>
                    <span class="profile-text">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>