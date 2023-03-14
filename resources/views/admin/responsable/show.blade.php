@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Responsable {{ $responsable->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/responsable') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/responsable/' . $responsable->id . '/edit') }}" title="Edit Responsable"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                        <form method="POST" action="{{ url('admin/responsable' . '/' . $responsable->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Responsable" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ $responsable->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Nombre </th>
                                      <td> {{ $responsable->nombre }} </td>
                                    </tr>
                                    <tr>
                                      <th> Ci </th>
                                      <td> {{ $responsable->ci }} </td>
                                    </tr>
                                    <tr>
                                      <th> Foto</th>
                                      <td> <img src="{{ asset('storage').'/'.$responsable->foto }}" alt="" class="d-block rounded-circle" style="width: 200px; height: 200px;"></td>
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
