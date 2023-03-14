@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Activo</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/activo/create') }}" class="btn btn-warning btn-sm" title="Add New Activo">
                            <i class="fas fa-fw fa-share" aria-hidden="true"></i> Agregar Nuevo
                        </a>
                        <a href="{{ url('/admin/reporte') }}" class="btn btn-dark btn-sm" style="background: #888;" title="Add New Activo">
                            <i class="fas fa-fw fa-share" aria-hidden="true"></i> Registros Activos Fijos
                        </a>
                        <a href="{{ url('/admin/etiqueta') }}" class="btn btn-dark btn-sm" title="Add New Activo">
                            <i class="fas fa-fw fa-share" aria-hidden="true"></i> Etiquetas Activos Fijos
                        </a>

                        <form method="GET" action="{{ url('/admin/activo') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
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
                                @foreach($activo as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->codigo }}</td><td>{{ $item->descrip }}</td><td>{{ $item->precio }}</td>
                                        <td class="float-right" >
                                            <a href="{{ url('/admin/activo/' . $item->id) }}" title="View Activo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/activo/' . $item->id . '/edit') }}" title="Edit Activo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</button></a>

                                            <form method="POST" action="{{ url('/admin/activo' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Activo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $activo->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
