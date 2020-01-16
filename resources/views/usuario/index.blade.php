
@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}  
@endif


<a href="{{ url('usuario/create') }}">Agregar Usuario</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Tipo de usuario</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($usuarios as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nombre }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->correo }}</td>
            <td>{{ $user->usuario }}</td>
            <td>{{ $user->rol }}</td>
            <td>

                <a href="{{ url('/usuario/'.$user->id).'/edit' }}">
                    Editar
                </a>

                |

                <form action="{{ url('/usuario/'.$user->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Borrar?')";>Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>