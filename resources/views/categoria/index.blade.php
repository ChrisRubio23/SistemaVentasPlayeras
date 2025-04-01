@extends('template')

@section('title','Categorias')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" 
rel="stylesheet" type="text/css"> <!-- Intentar insertarlo dentro del push css sin que se superponga el numero-->
@push('css')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('content')

@if (session('success'))
<script>
    let message = "{{session('success')}}";
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
  title: message
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
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Estado</th>
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
                                                @if ($categoria->caracteristica->estado == 1)
                                                <span class="fw-bolder p-1 rounded bg-success text-white">Activo</span>
                                                @else
                                                <span class="fw-bolder p-1 rounded bg-danger text-white">Eliminado</span>
                                                @endif
                                            </td>
                                            <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    
                                                <form action="{{route('categorias.edit',['categoria'=>$categoria])}}" method="get">
                                                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                                                </form>
                                                @if($categoria->caracteristica->estado == 1)
                                                <div>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmModal-{{$categoria->id}}">Eliminar</button> <!-- Ajustar tamaño del botón -->
                                                </div>
                                                @else
                                                <div>
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirmModal-{{$categoria->id}}">Restaurar</button> <!-- Ajustar tamaño del botón -->
                                                </div>
                                                @endif
                                            </div>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="confirmModal-{{$categoria->id}}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="confirmModalLabel">Mensaje de confirmación</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{$categoria->caracteristica->estado == 1 ? '¿Seguro que quieres eliminar esta categoría?' : '¿Seguro que quieres restaurar esta categoría? '}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <form action="{{route('categorias.destroy',['categoria'=>$categoria->id])}}"method="post">
                                                @method('DELETE')
                                                @csrf    
                                                <button type="submit" class="btn btn-danger">Confirmar</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        @endforeach
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