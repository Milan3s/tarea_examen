@extends('layouts/template')
@section('title','Crear | Tarea')
@section('contenido')

<main>
    <div class="container py-4">
        <h2>Crear Factura</h2>
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
       
        <!-- Accion del formulario por el metodo POST que lleva a la vista alumnos -->
        <form action="{{ url ('tarea') }}" method="POST">
            <!-- Elemento oculto -->
            @csrf
            <!-- Campos de los formularios -->
            <div class="mb-3 row my-4">
                <label for="foto" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                </div>
            </div>

            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="descripcion" id="descripcion" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="chekbox" class="col-sm-2 col-form-label">Estados</label>
            </div>

            <div class="form-check mx-5">
                <input class="form-check-input" type="radio" id="estado1" name="estado" value="Pendiente" checked>                                
                <label class="form-check-label">Pendiente</label>                                
              </div>
              
              <div class="form-check my-2 mx-5">
                <input class="form-check-input" type="radio" id="estado2" name="estado" value="Incompleta">
                <label class="form-check-label">Incompleta</label>
              </div>

              <div class="form-check my-2 mx-5">
                <input class="form-check-input" type="radio" id="estado3" name="estado" value="Completada">
                <label class="form-check-label">Completada</label>
              </div>
            

            <button type="submit" class="btn btn-primary my-4">Registrar</button>

            <a href="{{ url('tarea') }}" class="btn btn-secondary my-4">Volver</a>
        </form>
    </div>
</main>
