<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="">
                <img src="" class="navbar-brand-img">
                <span style="font-size:15px">&nbsp; BLH Sumsel</span>
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Home</span>
                        </a>
                    </li>

                    <!-- MENU -->
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="ni ni-controller text-primary"></i>
                            <span class="nav-link-text">Menu</span>
                        </a>
                        <div class="collapse" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('menu.index') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Navigasi </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Header </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- MENU -->

                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-dashboards2" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="ni ni-paper-diploma text-primary"></i>
                            <span class="nav-link-text">Publikasi</span>
                        </a>
                        <div class="collapse" id="navbar-dashboards2">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('berita.index') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Berita </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('pengumuman.index') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Pengumuman </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('galeri.index') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Galeri </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('dokumen.index') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Dokumen </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <!-- LOGOUT -->
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="ni ni-button-power text-red"></i>
                            <span class="nav-link-text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
