<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LINSADATA</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo-mini.png') }}" />

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
				</ul>
			</nav>
		
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Usuarios <small>TRABAJADORES</small></h1>
			</div>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="{{ url('usuario/create') }}" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO TRABAJADOR
			  		</a>
			  	</li>
			  	<li>
			  		<a href="{{ url('usuario') }}" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE TRABAJADORES
			  		</a>
			  	</li>
			  	<li>
			  		<a href="client-search.html" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR TRABAJADOR
			  		</a>
			  	</li>
			</ul>
		</div>

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<p>Corrige los siguientes errores:</p>
				<ul>
					@foreach ($errors->all() as $message)
						<li>{{ $message }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<!-- Panel nuevo trabajador -->
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO TRABAJADOR</h3>
				</div>
				<div class="panel-body">
					<form action="{{ url('/usuario') }}" method="post">

                        {{ csrf_field() }} <!-- Llave de acceso -->
                    
                        @include('include.form', ['Modo' => 'crear', 'Rol' => 'trabajador'])
                    
                    </form>
				</div>
			</div>
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