<!-- SideBar -->
<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            <a class="navbar-brand" href=""><img src="{{ url('assets/img/logo.png') }}" alt=""></a>
            <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <br>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="{{ url('assets/avatars/AdminMaleAvatar.png') }}" alt="UserIcon">
                <figcaption class="text-center text-titles">User Name</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <a href="my-data.html" title="Mis datos">
                        <i class="zmdi zmdi-account-circle"></i>
                    </a>
                </li>
                <li>
                    <a href="my-account.html" title="Mi cuenta">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" title="Salir del sistema" class="btn-exit-system">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        <ul class="list-unstyled full-box dashboard-sideBar-Menu">
            <li>
                <a href="{{ url('dashboard') }}">
                    <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="{{ url('usuario/create') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Trabajadores</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="">
                    <i class="zmdi zmdi-case-download zmdi-hc-fw"></i> Insumos
                </a>
            </li>
            <li>
                <a href="">
                    <i class="zmdi zmdi-file-text zmdi-hc-fw"></i> Informes
                </a>
            </li>
        </ul>
    </div>
</section>