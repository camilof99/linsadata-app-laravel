@extends('insumo/plantilla')
@section('contenido')
<!-- Panel nuevo trabajador -->
<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; EDITAR INSUMO</h3>
		</div>
		<div class="panel-body">
			<form action="{{ url('/insumo/'.$insumo->id) }}" method="post" enctype="multipart/form-data">

				{{ csrf_field() }}
				{{ method_field('PATCH') }} <!-- Accedemos directo al método update -->
			
				@include('insumo.form', ['Modo' => 'editar'])
				
			</form>
		</div>
	</div>
</div>
@endsection