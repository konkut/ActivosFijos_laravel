@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Oficina {{ $oficina->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/oficina') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/oficina/' . $oficina->id . '/edit') }}" title="Edit Oficina"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                        <form method="POST" action="{{ url('admin/oficina' . '/' . $oficina->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Oficina" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ $oficina->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Codigo </th>
                                      <td> {{ $oficina->codigo }} </td>
                                    </tr>
                                    <tr>
                                      <th> Nombre </th>
                                      <td> {{ $oficina->nombre }} </td>
                                    </tr>
                                    <tr>
                                      <th> Piso </th>
                                      <td> {{ $oficina->piso }} </td>
                                    </tr>
                                    <tr>
                                      <th> Responsable </th>
                                      <td> {{ $oficina->responsable->nombre }} </td>
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
