<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Document</title>
</head>
<body style="font-size: 12px;">
  <h2 class="font-weight-bolder text-monospace" style="font-size: 15px; text-align: center;">Reporte total de Activos Fijos</h2>
  <table class="table">
    <thead>
    <tr>
      <th scope="col" class="text-monospace">Id</th>
      <th scope="col" class="text-monospace">Codigo</th>
      <th scope="col" class="text-monospace">Descripcion</th>
      <th scope="col" class="text-monospace">Precio</th>
      <th scope="col" class="text-monospace">Fecha adquisicion</th>
      <th scope="col" class="text-monospace">Grupo</th>
      <th scope="col" class="text-monospace">Estado</th>
      <th scope="col" class="text-monospace">Oficina</th>
      <th scope="col" class="text-monospace">Foto</th>
      <th scope="col" class="text-monospace">Codigo QR</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($activos as $item)
    <tr>
      <td class="font-weight-lighter text-monospace">{{$item->id}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->codigo}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->descrip}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->precio}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->fechaadq}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->grupo->descrip}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->estado->descrip}}</td>
      <td class="font-weight-lighter text-monospace">{{$item->oficina->nombre}}</td>
      <td><img src="{{ asset('storage').'/'.$item->foto}}" alt="" class="d-block rounded-circle" style="width: 50px; height: 50px;"></td>
      <td><div style="width: 30px; height: 30px;">{!! DNS2D:: getBarcodeHTML('INFORMACION ACTIVO FIJO => CODIGO: '.$item->codigo.' DESCRIPCION: '.$item->descrip.' FECHA ADQUISICION: '.$item->fechaadq.' OFICINA: '.$item->oficina->nombre, 'QRCODE',1.5,1.5,'gray') !!}</div></td>
    </tr>
  @endforeach
  </tbody>
</table>
</body>
</html>