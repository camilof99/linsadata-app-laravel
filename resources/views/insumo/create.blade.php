@extends('insumo/plantilla')
@section('contenido')
<!-- Panel nuevo trabajador -->
<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO INSUMO</h3>
		</div>
		<div class="panel-body">
			<form action="{{ url('/insumo') }}" method="post" enctype="multipart/form-data">

				{{ csrf_field() }} <!-- Llave de acceso -->
			
				@include('insumo.form' ,['Modo' => 'crear'])
				<!--@//include('insumo.form', array('file'=> true) ,['Modo' => 'crear'])-->
			</form>
		</div>
	</div>
</div>
@endsection()