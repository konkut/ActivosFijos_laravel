<div class="form-group <?php echo e($errors->has('codigo') ? 'has-error' : ''); ?>">
    <label for="codigo" class="control-label"><?php echo e('Codigo'); ?></label>
    <input class="form-control" name="codigo" type="text" id="shadow" value="<?php echo e(isset($oficina->codigo) ? $oficina->codigo : ''); ?>" >
    <?php echo $errors->first('codigo', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
    <label for="nombre" class="control-label"><?php echo e('Nombre'); ?></label>
    <input class="form-control" name="nombre" type="text" id="shadow" value="<?php echo e(isset($oficina->nombre) ? $oficina->nombre : ''); ?>" >
    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('piso') ? 'has-error' : ''); ?>">
    <label for="piso" class="control-label"><?php echo e('Piso'); ?></label>
    <input class="form-control" name="piso" type="text" id="shadow" value="<?php echo e(isset($oficina->piso) ? $oficina->piso : ''); ?>" >
    <?php echo $errors->first('piso', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('responsable_id') ? 'has-error' : ''); ?>">
    <label for="responsable_id" class="control-label"><?php echo e('Responsable'); ?></label>
    <select class="form-control" name="responsable_id" id="responsable_id">
      <?php $__currentLoopData = $responsables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($r->id); ?>"><?php echo e($r->nombre); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo $errors->first('responsable_id', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Modificar' : 'Agregar'); ?>">
</div>
<?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/oficina/form.blade.php ENDPATH**/ ?>