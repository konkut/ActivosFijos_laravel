@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modificar Estado #{{ $estado->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/estado') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" id="formulario" action="{{ url('/admin/estado/' . $estado->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.estado.form', ['formMode' => 'edit'])
                                                     
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
@endsection

