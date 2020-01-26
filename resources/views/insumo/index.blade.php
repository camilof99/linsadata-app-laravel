@extends('insumo/plantilla')
@section('contenido')
<!-- Panel listado de insumos -->
<div class="container-fluid">
	<div class="panel panel-success">
		<div class="panel-heading" style="background: rgb(2, 120, 255);">
			<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE INSUMOS</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover text-center">
					<thead>
						<tr>
							<th class="text-center">DESCRIPCIÓN</th>
								<th class="text-center">CANTIDAD</th>
								<th class="text-center">FOTOGRAFÍA</th>
								<th class="text-center">TÉCNICO</th>
								<th class="text-center">OPCIONES</th>
							</tr>
					</thead>
					<tbody>
						@foreach ($insumos as $insumo)
							<tr>
								<td>{{ $insumo->descripcion }}</td>
								<td>{{ $insumo->cantidad }}</td>
								<td><img src="{{ asset('img/insumos/'. $insumo->foto) }}" width="100px;" height="70px;" alt="image"></td>
								<td>{{ $insumo->nombre }}</td>
								<td>
									<a href="{{ url('/insumo/'.$insumo->id).'/edit' }}" class="btn btn-success btn-raised btn-xs" style="background: rgb(2, 120, 255);">
										<i class="zmdi zmdi-edit"></i> Editar
									</a>
									@if (auth()->user()->role == 1)
									<form class="form-list" action="{{ url('/insumo/'.$insumo->id) }}" method="post">
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
			<!-- Paginador -->
			<div style="display: flex; align-items: center; justify-content: center;">
				{{ $insumos->links() }}
			</div>
		</div>
	</div>
</div>
@endsection()