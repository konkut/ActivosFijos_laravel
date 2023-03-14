

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Activo</div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/activo/create')); ?>" class="btn btn-warning btn-sm" title="Add New Activo">
                            <i class="fas fa-fw fa-share" aria-hidden="true"></i> Agregar Nuevo
                        </a>
                        <a href="<?php echo e(url('/admin/reporte')); ?>" class="btn btn-dark btn-sm" style="background: #888;" title="Add New Activo">
                            <i class="fas fa-fw fa-share" aria-hidden="true"></i> Registros Activos Fijos
                        </a>
                        <a href="<?php echo e(url('/admin/etiqueta')); ?>" class="btn btn-dark btn-sm" title="Add New Activo">
                            <i class="fas fa-fw fa-share" aria-hidden="true"></i> Etiquetas Activos Fijos
                        </a>

                        <form method="GET" action="<?php echo e(url('/admin/activo')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-append">
                                    <button class="btn btn-dark" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Codigo</th><th>Descripcion</th><th>Precio</th><th class="float-right" >Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $activo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->codigo); ?></td><td><?php echo e($item->descrip); ?></td><td><?php echo e($item->precio); ?></td>
                                        <td class="float-right" >
                                            <a href="<?php echo e(url('/admin/activo/' . $item->id)); ?>" title="View Activo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="<?php echo e(url('/admin/activo/' . $item->id . '/edit')); ?>" title="Edit Activo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                                            <form method="POST" action="<?php echo e(url('/admin/activo' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Activo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $activo->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/activo/index.blade.php ENDPATH**/ ?>