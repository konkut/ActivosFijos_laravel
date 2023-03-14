<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" id="shadow" name="codigo" type="text" id="codigo" value="{{ isset($activo->codigo) ? $activo->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descrip') ? 'has-error' : ''}}">
    <label for="descrip" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" id="shadow" name="descrip" type="text" id="descrip" value="{{ isset($activo->descrip) ? $activo->descrip : ''}}" >
    {!! $errors->first('descrip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" id="shadow" name="precio" type="text" id="precio" value="{{ isset($activo->precio) ? $activo->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaadq') ? 'has-error' : ''}}">
    <label for="fechaadq" class="control-label">{{ 'Fecha Adquisicion' }}</label>
    <input class="form-control" name="fechaadq" type="date" id="fechaadq" value="{{ isset($activo->fechaadq) ? $activo->fechaadq : ''}}" >
    {!! $errors->first('fechaadq', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('grupo_id') ? 'has-error' : ''}}">
    <label for="grupo_id" class="control-label">{{ 'Grupo' }}</label>

    <select class="form-control" name="grupo_id" id="grupo_id">
      @foreach($grupos as $g)
      <option value="{{$g->id}}">{{$g->descrip}}</option>
      @endforeach
    </select>
    
    {!! $errors->first('grupo_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado_id') ? 'has-error' : ''}}">
    <label for="estado_id" class="control-label">{{ 'Estado' }}</label>
    
    <select class="form-control" name="estado_id" id="estado_id">
      @foreach($estados as $e)
      <option value="{{$e->id}}">{{$e->descrip}}</option>
      @endforeach
    </select>
    
    {!! $errors->first('estado_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('oficina_id') ? 'has-error' : ''}}">
    <label for="oficina_id" class="control-label">{{ 'Oficina' }}</label>

    <select class="form-control" name="oficina_id" id="oficina_id">
      @foreach($oficinas as $o)
      <option value="{{$o->id}}">{{$o->nombre}}</option>
      @endforeach
    </select>

    {!! $errors->first('oficina_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($activo->foto) ? $activo->foto : ''}}" >
    <div id="zonaotro">Arrastre Aqui</div>
    <div class="area"><img src="" alt="" class="image"></div>
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modificar' : 'Agregar' }}">
</div>
<script>
const archivo = document.getElementById('foto');
archivo.addEventListener("change",(e)=>{
    SepararArchivos(archivo.files);

});
const SepararArchivos = objectFiles =>{
    for(let i = 0; i < objectFiles.length; i++){
        leerArchivo(objectFiles[i]);
    }
}
const leerArchivo = ar =>{
    const reader = new FileReader(); 
    reader.readAsDataURL(ar); 
    reader.addEventListener("load",(e)=>{   
      MostrarRes(e.currentTarget.result);
    })
}
const MostrarRes = res =>{
    let content = document.querySelector(".area");
    let image = document.querySelector(".image");
    image.src = `${res}`;
    image.style.width = "150px";
    image.style.height = "150px";
    image.style.margin = "20px";
}  
</script>
