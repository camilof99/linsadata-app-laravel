
<label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="nombre" value="{{ isset($usuarios->nombre) ? $usuarios->nombre : '' }}">
    <br>
    <label for="telefono">{{'Teléfono'}}</label>
    <input type="number" name="telefono" id="telefono" value="{{ isset($usuarios->telefono) ? $usuarios->telefono : '' }}">
    <br>
    <label for="correo">{{'Correo'}}</label>
    <input type="email" name="correo" id="correo" value="{{ isset($usuarios->correo) ? $usuarios->correo : '' }}">
    <br>
    <label for="usuario">{{'Usuario'}}</label>
    <input type="text" name="usuario" id="usuario" value="{{ isset($usuarios->usuario) ? $usuarios->usuario : '' }}">
    <br>
    <label for="clave">{{'Contraseña'}}</label>
    <input type="password" name="clave" id="clave" value="">
    <br>
    <label for="rol">{{'Rol'}}</label>
    <input type="number" name="rol" id="rol" value="{{ isset($usuarios->rol) ? $usuarios->rol : '' }}">
    <br>
    <input type="submit" value="{{ $Modo == 'crear' ? 'Agregar' : 'Editar' }}">
    <a href="{{ url('usuario') }}">Regresar</a>