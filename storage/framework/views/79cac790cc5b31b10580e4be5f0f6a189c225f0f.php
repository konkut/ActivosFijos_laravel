

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modificar Estado #<?php echo e($estado->id); ?></div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/estado')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <form method="POST" id="formulario" action="<?php echo e(url('/admin/estado/' . $estado->id)); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo e(csrf_field()); ?>


                            <?php echo $__env->make('admin.estado.form', ['formMode' => 'edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                     
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
      let form = document.getElementById("formulario");
      let val=false;
form.addEventListener("submit", (e) => {
    e.preventDefault();
    ValidarForm();
});
let descripcion = document.getElementById("descrip");
//let emailElem = document.getElementById("email");

const ImprimirError = (id, msg) => {
    document.getElementById(id).textContent = msg;
};
const agregarClase = (val1, val2) => {
    descripcion.classList.add(val1);
    descripcion.classList.remove(val2);
};

const ValidarForm = () => {
    if (descripcion.value == "") {
        ImprimirError("descripErr", "Porfavor! Ingrese la descripcion...");
        agregarClase("input-2", "input-1");
    } else {
        let regex = /^[a-zA-Z\s]+$/;
        if (regex.test(descripcion.value) === false) {
            ImprimirError(
                "descripErr",
                "Porfavor! Ingrese una descripcion valida..."
            );
            agregarClase("input-2", "input-1");
        } else {
            ImprimirError("descripErr", "");
            agregarClase("input-1", "input-2");
            window.location.replace("http://localhost:8080/Activosfijos/public/admin/estado");

        }
    }

    // if(emailElem.value == ""){
    //   ImprimirError("emailErr","Porfavor! Ingrese su email...");
    //   agregarClase("input-2","input-1");
    // }else{
    //   let regex = /^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-_]+\.[a-zA-Z]+$/;
    //   if(regex.test(emailElem.value) === false){
    //     ImprimirError("emailErr","Porfavor! Ingrese un email valido...");
    //     agregarClase("input-2","input-1");
    //   }else{
    //     ImprimirError("emailErr","");
    //     agregarClase("input-1","input-2");
    //   }
    // }
};

    </script> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/estado/edit.blade.php ENDPATH**/ ?>