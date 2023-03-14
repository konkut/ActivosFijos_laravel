

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Activo <?php echo e($activo->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/activo')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="<?php echo e(url('/admin/activo/' . $activo->id . '/edit')); ?>" title="Edit Activo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                        <form method="POST" action="<?php echo e(url('admin/activo' . '/' . $activo->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Activo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td><?php echo e($activo->id); ?></td>
                                    </tr>
                                    <tr>
                                      <th> Codigo </th>
                                      <td> <?php echo e($activo->codigo); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Descripcion </th>
                                      <td> <?php echo e($activo->descrip); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Precio </th>
                                      <td> <?php echo e($activo->precio); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Fecha Adquisicion </th>
                                      <td> <?php echo e($activo->fechaadq); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Grupo </th>
                                      <td> <?php echo e($activo->grupo->descrip); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Estado </th>
                                      <td> <?php echo e($activo->estado->descrip); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Oficina </th>
                                      <td> <?php echo e($activo->oficina->nombre); ?> </td>
                                    </tr>
                                    <tr>
                                      <th> Foto</th>
                                      <td> <img src="<?php echo e(asset('storage'.'/'.$activo->foto)); ?>" alt="" class="d-block rounded-circle medidaImagen"></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/activo/show.blade.php ENDPATH**/ ?>