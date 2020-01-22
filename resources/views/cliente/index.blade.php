<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuarios <small>CLIENTES</small></h1>
            </div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="{{ url('cliente/create') }}" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO CLIENTE
			  		</a>
			  	</li>
			  	<li>
			  		<a href="{{ url('cliente') }}" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE CLIENTES
			  		</a>
			  	</li>
			  	<li>
			  		<a href="" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR CLIENTES
			  		</a>
			  	</li>
			</ul>
		</div>

		@if (Session::has('Mensaje'))
			<div class="alert alert-success" role="alert">
				{{ Session::get('Mensaje') }}
			</div>
		@endif
		
		<!-- Panel listado de clientes -->
		<div class="container-fluid">
			<div class="panel panel-success">
				<div class="panel-heading" style="background: rgb(2, 120, 255);">
					<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE CLIENTES</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">DNI</th>
									<th class="text-center">NOMBRE</th>
									<th class="text-center">TELÉFONO</th>
									<th class="text-center">DIRECCIÓN</th>
                                    <th class="text-center">CORREO</th>
                                    <th class="text-center">OPCIONES</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($usuarios as $user)
                                    <tr>
                                        <td>{{ $user->DNI }}</td>
                                        <td>{{ $user->nombre }}</td>
                                        <td>{{ $user->telefono }}</td>
										<td>{{ $user->direccion }}</td>
										<td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ url('/cliente/'.$user->id).'/edit' }}" class="btn btn-success btn-raised btn-xs" style="background: rgb(2, 120, 255);">
                                                <i class="zmdi zmdi-edit"></i> Editar
                                            </a>
                            
                                            <form class="form-list" action="{{ url('/cliente/'.$user->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button  class="eliminar-btn btn btn-danger btn-raised btn-xs" type="submit" onclick="return confirm('¿Borrar?')";>
                                                    <i class="zmdi zmdi-delete"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
						</table>
					</div>

				</div>
			</div>

			<!-- Paginador -->
			<div style="display: flex; align-items: center; justify-content: center;">
				{{ $usuarios->links() }}
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