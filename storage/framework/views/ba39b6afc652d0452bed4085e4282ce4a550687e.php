

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Oficina <?php echo e($oficina->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/oficina')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="<?php echo e(url('/admin/oficina/' . $oficina->id . '/edit')); ?>" title="Edit Oficina"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                        <form method="POST" action="<?php echo e(url('admin/oficina' . '/' . $oficina->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Oficina" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td><?php echo e($oficina->id); ?></td>
                                    </tr>
                                    <tr>
                                      <th> Codigo </th>
                                      <td> <?php echo e($oficina->codigo); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Nombre </th>
                                      <td> <?php echo e($oficina->nombre); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Piso </th>
                                      <td> <?php echo e($oficina->piso); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Responsable </th>
                                      <td> <?php echo e($oficina->responsable->nombre); ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/oficina/show.blade.php ENDPATH**/ ?>