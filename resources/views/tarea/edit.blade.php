@extends('layouts.template')
@section('title', 'Editar | Tarea')
@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Tarea</h2>
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- Acción del formulario por el método PUT/PATCH que lleva a la vista de actualización -->
        <form action="{{ url('tarea/' . $tarea->id) }}" method="POST">
            <!-- Usar PUT o PATCH para actualizar la factura -->
            @method('PUT')
            @csrf
            <!-- Campos de los formularios con valores predefinidos de la factura a editar -->
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $tarea->nombre }}" readonly>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="estado" name="estado" value="Completada" {{ $tarea->estado === 'Completada' ? 'checked' : '' }}>
                        <label class="form-check-label" for="estado">Completada</label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="descripcion" class="col-sm-2 col-form-label">descripcion</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $tarea->descripcion }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>

            <a href="{{ url('tarea') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</main>


@endsection