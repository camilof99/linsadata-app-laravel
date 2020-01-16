<form action="{{ url('/usuario/' .$usuarios->id) }}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH') }} <!-- Accedemos directo al método update -->

    @include('usuario.form', ['Modo' => 'editar'])
    
</form>