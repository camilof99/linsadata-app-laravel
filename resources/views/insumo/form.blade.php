<fieldset>
    <legend><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> &nbsp; Información</legend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group label-floating">
                      <label class="control-label">Descripción *</label>
                      <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="descripcion" required="" maxlength="30" value="{{ isset($insumo->descripcion) ? $insumo->descripcion : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group label-floating">
                      <label class="control-label">Cantidad *</label>
                      <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="number" name="cantidad" id="cantidad" required="" maxlength="13" value="{{ isset($insumo->cantidad) ? $insumo->cantidad : '' }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12">
                <div class="custom-file label-floating">
                    <label class="custom-file-label">Fotografía *</label>
                    <input type="file" name="image" class="custom-file-input">
                </div>
            </div>
        </div>
    </div>
</fieldset>
<p class="text-center" style="margin-top: 20px;">
    <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> {{ $Modo == 'crear' ? 'Guardar' : 'Editar' }}</button>
</p>