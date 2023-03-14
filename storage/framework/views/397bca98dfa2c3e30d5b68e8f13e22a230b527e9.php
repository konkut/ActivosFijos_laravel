

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Responsable</div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/responsable/create')); ?>" class="btn btn-success btn-sm" title="Add New Responsable">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>

                        <form method="GET" action="<?php echo e(url('/admin/responsable')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
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
                                        <th>#</th><th>Nombre</th><th>Ci</th><th>Foto</th><th class="float-right">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $responsable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->nombre); ?></td><td><?php echo e($item->ci); ?></td>
                                        <td><img src="<?php echo e(asset('storage').'/'.$item->foto); ?>" alt="" class="d-block rounded-circle" style="width: 40px; height: 40px;"></td>
                                        <td class="float-right">
                                            <a href="<?php echo e(url('/admin/responsable/' . $item->id)); ?>" title="View Responsable"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Mostrar</button></a>
                                            <a href="<?php echo e(url('/admin/responsable/' . $item->id . '/edit')); ?>" title="Edit Responsable"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                                            <form method="POST" action="<?php echo e(url('/admin/responsable' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Responsable" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $responsable->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/responsable/index.blade.php ENDPATH**/ ?>