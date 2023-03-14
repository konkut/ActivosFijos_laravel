<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="shadow" value="{{ isset($oficina->codigo) ? $oficina->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="shadow" value="{{ isset($oficina->nombre) ? $oficina->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('piso') ? 'has-error' : ''}}">
    <label for="piso" class="control-label">{{ 'Piso' }}</label>
    <input class="form-control" name="piso" type="text" id="shadow" value="{{ isset($oficina->piso) ? $oficina->piso : ''}}" >
    {!! $errors->first('piso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('responsable_id') ? 'has-error' : ''}}">
    <label for="responsable_id" class="control-label">{{ 'Responsable' }}</label>
    <select class="form-control" name="responsable_id" id="responsable_id">
      @foreach($responsables as $r)
      <option value="{{$r->id}}">{{$r->nombre}}</option>
      @endforeach
    </select>
    {!! $errors->first('responsable_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modificar' : 'Agregar' }}">
</div>
