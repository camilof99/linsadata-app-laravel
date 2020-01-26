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
			  <h1 class="text-titles"><i class="zmdi zmdi-file-text zmdi-hc-fw"></i> INFORMES</h1>
            </div>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="{{ url('informe/create') }}" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO INFORME
			  		</a>
			  	</li>
			  	<li>
			  		<a href="{{ url('informe') }}" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE INFORMES
			  		</a>
			  	</li>
			  	<li>
			  		<a href="" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR INFORME
			  		</a>
			  	</li>
			</ul>
		</div>

		@if (Session::has('Mensaje')) 
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>{{Session::get('Mensaje')}}</strong>
		</div> 
		@endif
		
		<!-- Panel listado de trabajadores -->
		<div class="container-fluid">
			<div class="panel panel-success">
				<div class="panel-heading" style="background: rgb(2, 120, 255);">
					<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE INFORMES</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">DESCRIPCIÓN</th>
									<th class="text-center">TÉCNICO</th>
									<th class="text-center">CLIENTE</th>
                                    <th class="text-center">CREACIÓN</th>
                                    <th class="text-center">OPCIONES</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($informes as $informe)
                                    <tr>
                                        <td>{{ $informe->id }}</td>
                                        <td>{{ $informe->descripcion }}</td>
                                        <td>{{ $informe->usuario }}</td>
										<td>{{ $informe->cliente }}</td>
										<td>{{ $informe->created_at }}</td>
                                        <td>
                                            <a target="_blank" href="{{ asset('informes/'.$informe->descripcion) }}" class="btn btn-success btn-raised btn-xs" style="background: rgb(2, 120, 255);">
                                                <i class="zmdi zmdi-eye"></i> Ver PDF
                                            </a>
											@if (auth()->user()->role == 1)
                                            <form class="form-list" action="{{ url('/informe/'.$informe->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button  class="eliminar-btn btn btn-danger btn-raised btn-xs" type="submit" onclick="return confirm('¿Borrar?')";>
                                                    <i class="zmdi zmdi-delete"></i> Eliminar</button>
											</form>
											@endif
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
				{{ $informes->links() }}
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