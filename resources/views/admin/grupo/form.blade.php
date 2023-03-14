<div class="form-group {{ $errors->has('descrip') ? 'has-error' : ''}}">
    <label for="descrip" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descrip" type="text" id="shadow" value="{{ isset($grupo->descrip) ? $grupo->descrip : ''}}" >
    {!! $errors->first('descrip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vidautil') ? 'has-error' : ''}}">
    <label for="vidautil" class="control-label">{{ 'Vida Util' }}</label>
    <input class="form-control" name="vidautil" type="text" id="shadow" value="{{ isset($grupo->vidautil) ? $grupo->vidautil : ''}}" >
    {!! $errors->first('vidautil', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modificar' : 'Agregar' }}">
</div>
