<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">
                    @if (Auth::guard('admin')->check())
                        {{ Auth::guard('admin')->user()->fullname }}
                    @else
                        {{ Auth::user()->fullname }}
                    @endif
                </a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">
                @if (Auth::guard('admin')->check())
                    Administrator
                @else
                    User
                @endif
            </p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-muted">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Reports</li>

                <li>
                    <a href="index.html">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-page-layout-sidebar-left"></i>
                        <span> Laporan </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">Coming Soon</a></li>
                    </ul>
                </li>

                <li class="menu-title">Features</li>

                <li>
                    <a href="/pemasukan">
                        <i class="fas fa-wallet"></i>
                        <span> Pemasukan </span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-cash-register"></i>
                        <span> Pengeluaran </span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-balance-scale"></i>
                        <span> Utang </span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span> Piutang </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>