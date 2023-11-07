<!-- Sidebar Menu -->
@if (auth()->user()->roles_id == 1)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link @yield('activeDashboard')">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Beranda
                    </p>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="#" class="nav-link @yield('dataUser')">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Data Anggota
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}" class="nav-link @yield('kelolaUser')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Anggota</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.user.create') }}" class="nav-link @yield('tambahUser')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Anggota</p>
                        </a>
                    </li>
                </ul>
            </li> -->
            <li class="nav-item">
                <a href="#" class="nav-link @yield('info')">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Info SDGs Center
                        <i class="fa fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/profile/1/edit" class="nav-link @yield('profile')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/ourteam/1/edit" class="nav-link @yield('ourteam')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Our Team</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('publication')">
                    <i class="nav-icon fa fa-check-square"></i>
                    <p>
                        Publication
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.article.index') }}" class="nav-link @yield('article')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Article</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.journal.index') }}" class="nav-link @yield('journal')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Journal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" class="nav-link @yield('category')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.galery.index') }}" class="nav-link @yield('galery')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Galery</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.event.index') }}" class="nav-link @yield('event')">
                    <i class="nav-icon fa fa-calendar"></i>
                    <p>
                        Event
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.archive.index') }}" class="nav-link @yield('archive')">
                    <i class="nav-icon fa fa-map-marker"></i>
                    <p>
                        Archive
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link @yield('')"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endif

<!-- /.sidebar-menu -->
