<<<<<<< HEAD
<!-- Ajustar formato del código -->
=======
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
@extends('template')

@section('title','Categorias')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" 
rel="stylesheet" type="text/css"> <!-- Intentar insertarlo dentro del push css sin que se superponga el numero-->
@push('css')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('content')

@if (session('sucess'))
<script>
    const Toast = Swal.mixin({ /* Dar formato en otro momento */
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "success",
  title: "Operación exitosa"
});
</script>

@endif()

<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Categorías</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Categorías</li>
    </ol>

    <div class="mb-4">
        <a href="{{ route('categorias.create')}}">
            <button type="button" class="btn btn-primary">Añadir nuevo registro</button>
        </a>
    </div>

    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla categorías
                            </div>
                            <div class="card-body">
<<<<<<< HEAD
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categorias as $categoria)
                                        <tr>
                                            <td>
                                                {{$categoria->caracteristica->nombre}}
                                            </td>
                                            <td>
                                                {{$categoria->caracteristica->descripcion}}
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    
                                                <form action="{{route('categorias.edit',['categoria'=>$categoria])}}" method="get">
                                                    <button type="submit" class="btn btn-warning">Editar</button>
                                                </form>
                                                
                                                <button type="button" class="btn btn-danger">Eliminar</button> <!-- Ajustar tamaño del botón -->
                                            </div>
                                            </td>
                                        </tr>
                                        @endforeach
=======
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
                                    </tbody>
                                </table>
                            </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
@endpush