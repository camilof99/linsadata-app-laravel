<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linsadata</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<style>
	textarea {	
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;	
		width: 100%;
	}
</style>

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
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
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
			  		<a href="client-search.html" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR INFORME
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
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO INFORME</h3>
				</div>
				<div class="panel-body">
					<form action="{{ url('/informe') }}" method="post">

                        {{ csrf_field() }} <!-- Llave de acceso -->
                    
                        <fieldset>
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información proceso</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                              <label style="color: #878787;">Nombre proceso realizado *</label>
                                              <input class="form-control" type="text" name="descripcion" required="" maxlength="30" value="{{ isset($usuarios->DNI) ? $usuarios->DNI : '' }}">
                                        </div>
                                    </div>
                                                                
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group label-floating">
                                                <label style="color: #878787;" class="">Cliente *</label>
                                                <select name="cliente" class="select-reg custom-select custom-select-sm">
													@foreach ($clienteList as $cliente)
														<tr>
															<option value="{{ $cliente->nombre }}">{{ $cliente->nombre }}</option>
														</tr>
													@endforeach

												</select>
																				
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group label-floating">
                                                  <label style="color: #878787;" class="">Fecha *</label>
                                                  <input class="form-control" type="date" name="fecha" required="">
                                            </div>
                                        </div>
                                
                                </div> 
							</div>
            
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <label style="color: #878787;" class="">Objetivo general *</label><br>
                                              <textarea class="" required="" name="objetivo_gen" id="" cols="45" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <label style="color: #878787;" class="">Objetivos Especificos *</label><br>
                                              <textarea class="" required="" name="objetivo_esp" id="" cols="45" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label style="color: #878787;" class="">Insumos utilizados *</label>
									<select name="insumo" id="tema" class="select-reg custom-select custom-select-sm">
										<option value=""></option>
										@foreach ($insumosList as $insumo)
											<tr>
												<option value="{{ $insumo->descripcion }}">{{ $insumo->descripcion }}</option>
											</tr>
										@endforeach

									</select>

								</div>

							</div>

							<div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <label style="color: #878787;" class="">Lista insumos *</label><br>
                                              <textarea disabled class="" required="" name="list_insumos" id="eltexto" cols="45" rows="7"></textarea>
                                        </div>
                                    </div>
                                </div>
							</div>

							<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label style="color: #878787;" class="">Procedimiento *</label><br>
										<textarea class="" required="" name="procedimiento" id="" cols="100" rows="5"></textarea>
									</div>
								</div>
							</div>

							<div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <label style="color: #878787;" class="">Conclusión *</label><br>
                                              <textarea class="" required="" name="conclusion" id="" cols="45" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <label style="color: #878787;" class="">Evidencia *</label><br>
                                              
                                        </div>
									</div>
									
                                </div>
							</div>

                        </fieldset>
                        <p class="text-center" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Generar informe</button>
                        </p>
                    
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
	<script src="{{ asset('js/functions.js') }}"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>