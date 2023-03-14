<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Etiquetas</title>
</head>
<body style="font-size: 12px;">
  <table>
  <tbody>
  <?php $__currentLoopData = $activos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td style="background-color: #7773;">
        <table>
             <tr>
              <td><?php echo DNS2D:: getBarcodeHTML($item->codigo.' - '.$item->descrip.' - '.$item->fechaadq.' - '.$item->oficina->nombre, 'QRCODE',4,4); ?>

            </td>
              <td>
                <div class="card-body" >
                <h5 class="card-title"><?php echo e($item->codigo); ?></h5>
                <p class="card-text"><?php echo e($item->descrip); ?></p>
                <p class="card-text"><?php echo e($item->oficina->nombre); ?></p>
                <p class="card-text"><small class="text-muted"><?php echo e($item->fechaadq); ?></small></p>
                </div>
              </td>
            </tr>
           </table>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</body>
</html><?php /**PATH E:\xampp\htdocs\Activosfijos\resources\views/admin/etiqueta.blade.php ENDPATH**/ ?>