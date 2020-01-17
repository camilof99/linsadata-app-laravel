<fieldset>
    <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group label-floating">
                      <label class="control-label">DNI/CEDULA *</label>
                      <input pattern="[0-9-]{1,30}" class="form-control" type="text" name="DNI" required="" maxlength="30" value="{{ isset($usuarios->DNI) ? $usuarios->DNI : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Nombres *</label>
                      <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="nombre" required="" maxlength="30" value="{{ isset($usuarios->nombre) ? $usuarios->nombre : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Teléfono *</label>
                      <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="number" name="telefono" id="telefono" required="" maxlength="13" value="{{ isset($usuarios->telefono) ? $usuarios->telefono : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Dirección *</label>
                      <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="direccion" id="direccion" required="" maxlength="50" value="{{ isset($usuarios->direccion) ? $usuarios->direccion : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Cargo/Ocupación *</label>
                      <select name="rol" class="select-reg custom-select custom-select-sm">
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset>
    <legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Correo *</label>
                      <input class="form-control" type="email" name="email" id="email" required="" maxlength="70" value="{{ isset($usuarios->email) ? $usuarios->email : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Contraseña *</label>
                      <input class="form-control" type="password" name="password" id="password" required="" maxlength="70">
                </div>
            </div>
        </div>
    </div>
</fieldset>
<p class="text-center" style="margin-top: 20px;">
    <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> {{ $Modo == 'crear' ? 'Guardar' : 'Editar' }}</button>
</p>
