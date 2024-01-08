@extends('layouts/template')

@section('title','Listar | Tarea')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de Tareas</h2>
 
        <a href="{{'tarea/create'}}" class="btn btn-primary btn-sm my-4">Nueva Tarea</a>

        <table class="table table-hover my-3">
            <thead>
                <tr>
                    <th>#</th>                
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Descripción</th>
                    <th>Acción 1</th>
                    <th>Acción 2</th>  
                </tr>
            </thead>
            <tbody>
                <!-- Recorrer las filas para mostrarlas en la tabla -->
                @foreach($tareas as $tarea) <!-- abrir el bucle -->
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->nombre }}</td>
                    <td>{{ $tarea->estado }}</td>
                    <td>{{ $tarea->descripcion }}</td>   

                    <td>
                         <a class="btn btn-warning btn-sm" href="{{ url('tarea/'.$tarea->id.'/edit') }}">Editar</a>
                    </td>
                    
                    <td>                    
                        <form action="{{ url('tarea/'.$tarea->id) }}" method="post">                                
                            @method("DELETE")                                
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                                   
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</main>
@endsection
