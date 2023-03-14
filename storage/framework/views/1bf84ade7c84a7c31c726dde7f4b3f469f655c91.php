

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Responsable <?php echo e($responsable->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/responsable')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="<?php echo e(url('/admin/responsable/' . $responsable->id . '/edit')); ?>" title="Edit Responsable"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                        <form method="POST" action="<?php echo e(url('admin/responsable' . '/' . $responsable->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Responsable" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td><?php echo e($responsable->id); ?></td>
                                    </tr>
                                    <tr>
                                      <th> Nombre </th>
                                      <td> <?php echo e($responsable->nombre); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Ci </th>
                                      <td> <?php echo e($responsable->ci); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Foto</th>
                                      <td> <img src="<?php echo e(asset('storage').'/'.$responsable->foto); ?>" alt="" class="d-block rounded-circle" style="width: 200px; height: 200px;"></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/responsable/show.blade.php ENDPATH**/ ?>