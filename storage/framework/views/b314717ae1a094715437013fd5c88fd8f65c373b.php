<div class="form-group <?php echo e($errors->has('descrip') ? 'has-error' : ''); ?>">
    <label for="descrip" class="control-label"><?php echo e('Descripcion'); ?></label>
    <input class="form-control" name="descrip" type="text" id="shadow" value="<?php echo e(isset($grupo->descrip) ? $grupo->descrip : ''); ?>" >
    <?php echo $errors->first('descrip', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('vidautil') ? 'has-error' : ''); ?>">
    <label for="vidautil" class="control-label"><?php echo e('Vida Util'); ?></label>
    <input class="form-control" name="vidautil" type="text" id="shadow" value="<?php echo e(isset($grupo->vidautil) ? $grupo->vidautil : ''); ?>" >
    <?php echo $errors->first('vidautil', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Modificar' : 'Agregar'); ?>">
</div>
<?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/grupo/form.blade.php ENDPATH**/ ?>