<div class="form-group {{ $errors->has('descrip') ? 'has-error' : ''}}">
    <label for="descrip" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control shadow" name="descrip" type="text" id="descrip" value="{{ isset($estado->descrip) ? $estado->descrip : ''}}" >
    <div class="error" id="descripErr"></div>
    {!! $errors->first('descrip', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modificar' : 'Agregar' }}">
</div>
