@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Activo {{ $activo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/activo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/activo/' . $activo->id . '/edit') }}" title="Edit Activo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                        <form method="POST" action="{{ url('admin/activo' . '/' . $activo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Activo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ $activo->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Codigo </th>
                                      <td> {{ $activo->codigo }} </td>
                                    </tr>
                                    <tr>
                                      <th> Descripcion </th>
                                      <td> {{ $activo->descrip }} </td>
                                    </tr>
                                    <tr>
                                      <th> Precio </th>
                                      <td> {{ $activo->precio }} </td>
                                    </tr>
                                    <tr>
                                      <th> Fecha Adquisicion </th>
                                      <td> {{ $activo->fechaadq }} </td>
                                    </tr>
                                    <tr>
                                      <th> Grupo </th>
                                      <td> {{ $activo->grupo->descrip }} </td>
                                    </tr>
                                    <tr>
                                      <th> Estado </th>
                                      <td> {{ $activo->estado->descrip }} </td>
                                    </tr>
                                    <tr>
                                      <th> Oficina </th>
                                      <td> {{ $activo->oficina->nombre }} </td>
                                    </tr>
                                    <tr>
                                      <th> Foto</th>
                                      <td> <img src="{{ asset('storage'.'/'.$activo->foto) }}" alt="" class="d-block rounded-circle medidaImagen"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
