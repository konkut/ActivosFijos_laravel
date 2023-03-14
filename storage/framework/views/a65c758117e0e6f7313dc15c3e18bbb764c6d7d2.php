<div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
    <label for="nombre" class="control-label"><?php echo e('Nombre'); ?></label>
    <input class="form-control" name="nombre" type="text" id="shadow" value="<?php echo e(isset($responsable->nombre) ? $responsable->nombre : ''); ?>" >
    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('ci') ? 'has-error' : ''); ?>">
    <label for="ci" class="control-label"><?php echo e('Ci'); ?></label>
    <input class="form-control" name="ci" type="text" id="shadow" value="<?php echo e(isset($responsable->ci) ? $responsable->ci : ''); ?>" >
    <?php echo $errors->first('ci', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
    <label for="foto" class="control-label"><?php echo e('Foto'); ?></label>
    <input class="form-control" name="foto" type="file" id="foto" value="<?php echo e(isset($responsable->foto) ? $responsable->foto : ''); ?>" >
    <?php echo $errors->first('foto', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Modificar' : 'Agregar'); ?>">
</div>
<?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/responsable/form.blade.php ENDPATH**/ ?>