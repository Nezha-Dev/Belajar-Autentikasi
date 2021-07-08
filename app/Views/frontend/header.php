<!-- Start Header -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Start Logo -->
        <a class="logo" href="/">
            <img src="/assets/frontend/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
            <img src="/assets/frontend/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>
        <!-- End Logo -->

        <!-- Start Responsive Mobile Menu -->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Responsive Mobile Menu -->

        <!-- Start Tombol Autentikasi -->
        <ul class="auth-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <div class="btn btn-primary">Masuk</div>
                </a>
            </li>
            <li class="list-inline-item ps-1 mb-0">
                <a href="javascript:void(0)" target="_blank">
                    <div class="btn btn-outline-primary">Daftar</div>
                </a>
            </li>
        </ul>
        <!-- End Tombol Autentikasi -->

        <!-- Start Responsive Menu -->
        <div id="navigation">
            <ul class="navigation-menu" id="navmenu-nav">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Profil</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">Tentang LPK-LKP Indera</a></li>
                        <li><a href="#" class="sub-menu-item">Profil Lembaga</a></li>
                        <li><a href="#" class="sub-menu-item">Struktur Organisasi</a></li>
                        <li><a href="#" class="sub-menu-item">Status dan Perijinan Lembaga</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#pelayanan">Pelayanan</a>
                </li>
                <li class="has-submenu">
                    <a href="#galeri">Galeri</a>
                </li>
                <li class="has-submenu">
                    <a href="#testimoni">Testimoni</a>
                </li>
                <li class="has-submenu">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- End Responsive Menu -->
    </div>
</header>
<!-- End Header-->