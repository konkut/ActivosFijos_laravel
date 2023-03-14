<div class="form-group <?php echo e($errors->has('descrip') ? 'has-error' : ''); ?>">
    <label for="descrip" class="control-label"><?php echo e('Descripcion'); ?></label>
    <input class="form-control shadow" name="descrip" type="text" id="descrip" value="<?php echo e(isset($estado->descrip) ? $estado->descrip : ''); ?>" >
    <div class="error" id="descripErr"></div>
    <?php echo $errors->first('descrip', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Modificar' : 'Agregar'); ?>">
</div>
<?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/estado/form.blade.php ENDPATH**/ ?>