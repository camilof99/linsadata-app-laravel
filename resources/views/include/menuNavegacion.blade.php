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
                <figcaption class="text-center text-titles">{{ auth()->user()->nombre }}</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <form id="formularioaenviar" method="post" action="{{ route('logout') }}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn-exit-system"><i class="zmdi zmdi-power zmdi-hc-lg zmdi-hc-fw"></i> Cerrar sesión</button>
                    </form>
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
                    <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> 
                    Usuarios 
                    @if ($usuariosCant != 0)
                    &emsp;&emsp;&emsp;&nbsp;
                    <span class="label label-info">{{ $usuariosCant }}</span>
                    @endif 
                    <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="{{ url('usuario') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Trabajadores 
                            @if ($trabajadoresCant != 0)
                            &emsp;&emsp;&nbsp;&nbsp;
                            <span class="label label-info">{{ $trabajadoresCant }}</span>
                            @endif 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('cliente') }}"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes
                            @if ($clientesCant != 0)
                            &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                            <span class="label label-info">{{ $clientesCant }}</span>
                            @endif 
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="{{ url('insumo') }}">
                    <i class="zmdi zmdi-case-download zmdi-hc-fw"></i> Insumos
                    @if ($insumosCant != 0)
                            &emsp;&emsp;&emsp;&nbsp;
                            <span class="label label-info">{{ $insumosCant }}</span>
                            @endif 
                </a>
            </li>
            <li>
                <a href="{{ url('informe') }}">
                    <i class="zmdi zmdi-file-text zmdi-hc-fw"></i> Informes
                    @if ($informesCant != 0)
                            &emsp;&emsp;&emsp;&nbsp;
                            <span class="label label-info">{{ $informesCant }}</span>
                            @endif 
                </a>
            </li>
        </ul>
    </div>
</section>