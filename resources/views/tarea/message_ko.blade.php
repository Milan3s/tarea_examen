@extends('layouts.template')

@section('title','Mensaje | Tareas')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Respuesta del Mensaje</h2>

            <div class="container py-4">
                <p>{{ $msg }}</p>
            </div>

            <div class="container py-4">
                <a href="{{ url('tarea') }}" class="btn btn-secondary">Regresar</a>
            </div>
    </div>
</main>