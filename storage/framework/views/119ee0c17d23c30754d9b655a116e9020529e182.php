<div class="form-group <?php echo e($errors->has('codigo') ? 'has-error' : ''); ?>">
    <label for="codigo" class="control-label"><?php echo e('Codigo'); ?></label>
    <input class="form-control" id="shadow" name="codigo" type="text" id="codigo" value="<?php echo e(isset($activo->codigo) ? $activo->codigo : ''); ?>" >
    <?php echo $errors->first('codigo', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('descrip') ? 'has-error' : ''); ?>">
    <label for="descrip" class="control-label"><?php echo e('Descripcion'); ?></label>
    <input class="form-control" id="shadow" name="descrip" type="text" id="descrip" value="<?php echo e(isset($activo->descrip) ? $activo->descrip : ''); ?>" >
    <?php echo $errors->first('descrip', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('precio') ? 'has-error' : ''); ?>">
    <label for="precio" class="control-label"><?php echo e('Precio'); ?></label>
    <input class="form-control" id="shadow" name="precio" type="text" id="precio" value="<?php echo e(isset($activo->precio) ? $activo->precio : ''); ?>" >
    <?php echo $errors->first('precio', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('fechaadq') ? 'has-error' : ''); ?>">
    <label for="fechaadq" class="control-label"><?php echo e('Fecha Adquisicion'); ?></label>
    <input class="form-control" name="fechaadq" type="date" id="fechaadq" value="<?php echo e(isset($activo->fechaadq) ? $activo->fechaadq : ''); ?>" >
    <?php echo $errors->first('fechaadq', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group <?php echo e($errors->has('grupo_id') ? 'has-error' : ''); ?>">
    <label for="grupo_id" class="control-label"><?php echo e('Grupo'); ?></label>

    <select class="form-control" name="grupo_id" id="grupo_id">
      <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($g->id); ?>"><?php echo e($g->descrip); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    <?php echo $errors->first('grupo_id', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('estado_id') ? 'has-error' : ''); ?>">
    <label for="estado_id" class="control-label"><?php echo e('Estado'); ?></label>
    
    <select class="form-control" name="estado_id" id="estado_id">
      <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($e->id); ?>"><?php echo e($e->descrip); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    <?php echo $errors->first('estado_id', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('oficina_id') ? 'has-error' : ''); ?>">
    <label for="oficina_id" class="control-label"><?php echo e('Oficina'); ?></label>

    <select class="form-control" name="oficina_id" id="oficina_id">
      <?php $__currentLoopData = $oficinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($o->id); ?>"><?php echo e($o->nombre); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <?php echo $errors->first('oficina_id', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
    <label for="foto" class="control-label"><?php echo e('Foto'); ?></label>
    <input class="form-control" name="foto" type="file" id="foto" value="<?php echo e(isset($activo->foto) ? $activo->foto : ''); ?>" >
    <div id="zonaotro">Arrastre Aqui</div>
    <div class="area"><img src="" alt="" class="image"></div>
    <?php echo $errors->first('foto', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Modificar' : 'Agregar'); ?>">
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
<?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/activo/form.blade.php ENDPATH**/ ?>