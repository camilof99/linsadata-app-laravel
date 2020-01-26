<!DOCTYPE html>
<html lang="es">
<head>
	<title>LINSADATA</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo-mini.png') }}" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    @include('include.menuNavegacion')

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Sistema <small>Registros</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Usuarios
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account-add zmdi-hc-fw"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">{{ $usuariosCant }}</p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Insumos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-case-download zmdi-hc-fw"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">{{ $insumosCant }}</p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Informes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">{{ $informesCant }}</p>
					<small>Registros</small>
				</div>
			</article>
		</div>
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">System <small>TimeLine registros</small></h1>
			</div>
			<section id="cd-timeline" class="cd-container">
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="assets/avatars/TrabajadorMaleAvatar.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
						@foreach ($trabajadoresList as $usuario)
						<h4 class="text-center text-titles">{{ $loop->iteration }} - {{ $usuario->nombre }} ({{ $usuario->rol }})</h4>
							<p class="text-center">
							<i class="zmdi zmdi-timer zmdi-hc-fw"></i> Creación: <em>{{ $usuario->created_at }}</em>
							</p>
						@endforeach
                        
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> Trabajadores</span>
                    </div>
                </div>  
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="assets/avatars/ClienteMaleAvatar.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        @foreach ($clienteList as $cliente)
						<h4 class="text-center text-titles">{{ $loop->iteration }} - {{ $cliente->nombre }}</h4>
							<p class="text-center">
							<i class="zmdi zmdi-timer zmdi-hc-fw"></i> Creación: <em>{{ $cliente->created_at }}</em>
							</p>
						@endforeach
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> Clientes</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="assets/avatars/RegistroAvatar.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        @foreach ($insumosList as $insumo)
						<h4 class="text-center text-titles">{{ $loop->iteration }} - {{ $insumo->descripcion }}</h4>
							<p class="text-center">
							<i class="zmdi zmdi-timer zmdi-hc-fw"></i> Creación: <em>{{ $insumo->created_at }}</em>
							</p>
						@endforeach
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> Insumos</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="assets/avatars/RegistroAvatar.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
						@foreach ($informesList as $informe)
						<h4 class="text-center text-titles">{{ $loop->iteration }} - {{ $informe->descripcion }}</h4>
							<p class="text-center">
							<i class="zmdi zmdi-timer zmdi-hc-fw"></i> Creación: <em>{{ $informe->created_at }}</em>
							</p>
						@endforeach
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> Informes</span>
                    </div>
                </div>   
            </section>


		</div>
	</section>

	<!--====== Scripts -->
	<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/material.min.js') }}"></script>
	<script src="{{ asset('js/ripples.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>