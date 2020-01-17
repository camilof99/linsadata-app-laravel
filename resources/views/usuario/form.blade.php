
<label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="nombre" value="{{ isset($usuarios->nombre) ? $usuarios->nombre : '' }}">
    <br>
    <label for="telefono">{{'Teléfono'}}</label>
    <input type="number" name="telefono" id="telefono" value="{{ isset($usuarios->telefono) ? $usuarios->telefono : '' }}">
    <br>
    <label for="email">{{'Correo'}}</label>
    <input type="email" name="email" id="email" value="{{ isset($usuarios->email) ? $usuarios->email : '' }}">
    <br>
    <label for="username">{{'Usuario'}}</label>
    <input type="text" name="username" id="username" value="{{ isset($usuarios->username) ? $usuarios->username : '' }}">
    <br>
    <label for="password">{{'Contraseña'}}</label>
    <input type="password" name="password" id="password" value="">
    <br>
    <label for="rol">{{'Rol'}}</label>
    <input type="number" name="rol" id="rol" value="{{ isset($usuarios->rol) ? $usuarios->rol : '' }}">
    <br>
    <input type="submit" value="{{ $Modo == 'crear' ? 'Agregar' : 'Editar' }}">
    <a href="{{ url('usuario') }}">Regresar</a>