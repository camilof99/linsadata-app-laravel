<form action="{{ url('/usuario') }}" method="post">

    {{ csrf_field() }} <!-- Llave de acceso -->

    @include('usuario.form', ['Modo' => 'crear'])

</form>
