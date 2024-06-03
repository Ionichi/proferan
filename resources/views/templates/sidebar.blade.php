<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <span class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">
                    @if (Auth::guard('admin')->check())
                        {{ Auth::guard('admin')->user()->fullname }}
                    @else
                        {{ Auth::user()->fullname }}
                    @endif
                </span>
            </div>
            <p class="text-muted">
                @if (Auth::guard('admin')->check())
                    Administrator
                @else
                    User
                @endif
            </p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Reports</li>

                <li>
                    <a href="/dashboard">
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
                        <li><a href="/laporan/jurnal-umum">Jurnal Umum</a></li>
                        <li><a href="/laporan/laba-rugi">Laba Rugi</a></li>
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
                    <a href="/pengeluaran">
                        <i class="fas fa-cash-register"></i>
                        <span> Pengeluaran </span>
                    </a>
                </li>
                <li>
                    <a href="/utang">
                        <i class="fas fa-balance-scale"></i>
                        <span> Utang </span>
                    </a>
                </li>
                <li>
                    <a href="/piutang">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span> Piutang </span>
                    </a>
                </li>
                <li>
                    <a href="/penyesuaian">
                        <i class="fas fa-edit"></i>
                        <span> Penyesuaian </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>