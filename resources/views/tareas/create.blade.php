@extends('layouts.app')
@section('title', 'Crear Tarea')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-light">Crear nueva Tarea</h1>
</div>
<div class="card bg-dark text-light border-secondary shadow">
    <div class="card-body">

        <form action="{{ route('tareas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text"
                       name="titulo"
                       id="titulo"
                       class="form-control bg-secondary text-light border-0"
                       required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text"
                       name="descripcion"
                       id="descripcion"
                       class="form-control bg-secondary text-light border-0"
                       required>
            </div>
            <div class="mb-3">
                <label for="materia" class="form-label">Materia</label>
                <input type="text"
                       name="materia"
                       id="materia"
                       class="form-control bg-secondary text-light border-0"
                       required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select name="estado"
                        id="estado"
                        class="form-select bg-secondary text-light border-0"
                        required>
                    <option value="PENDIENTE">Pendiente</option>
                    <option value="EN PROGRESO">En Progreso</option>
                    <option value="COMPLETADA">Completada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success px-4 mt-2">
                <i class="bi bi-check-circle"></i> Guardar
            </button>
        </form>

    </div>
</div>

@endsection
