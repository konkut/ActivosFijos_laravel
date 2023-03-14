<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="shadow" value="{{ isset($responsable->nombre) ? $responsable->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ci') ? 'has-error' : ''}}">
    <label for="ci" class="control-label">{{ 'Ci' }}</label>
    <input class="form-control" name="ci" type="text" id="shadow" value="{{ isset($responsable->ci) ? $responsable->ci : ''}}" >
    {!! $errors->first('ci', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($responsable->foto) ? $responsable->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modificar' : 'Agregar' }}">
</div>
