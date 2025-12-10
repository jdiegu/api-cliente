@extends('layouts.app')
@section('title', 'Editar Tarea')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-light">Editar Tarea</h1>
</div>
<div class="card bg-dark text-light border-secondary shadow">
    <div class="card-body">
        <form action="{{ route('tareas.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $tarea['id'] }}">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text"
                       name="titulo"
                       id="titulo"
                       class="form-control bg-secondary text-light border-0"
                       value="{{ $tarea['titulo'] }}"
                       required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text"
                       name="descripcion"
                       id="descripcion"
                       class="form-control bg-secondary text-light border-0"
                       value="{{ $tarea['descripcion'] }}"
                       required>
            </div>
            <div class="mb-3">
                <label for="materia" class="form-label">Materia</label>
                <input type="text"
                       name="materia"
                       id="materia"
                       class="form-control bg-secondary text-light border-0"
                       value="{{ $tarea['materia'] }}"
                       required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select name="estado"
                        id="estado"
                        class="form-select bg-secondary text-light border-0"
                        required>
                    <option value="PENDIENTE" {{ $tarea['estado'] == 'PENDIENTE' ? 'selected' : '' }}>Pendiente</option>
                    <option value="EN PROGRESO" {{ $tarea['estado'] == 'EN PROGRESO' ? 'selected' : '' }}>En Progreso</option>
                    <option value="COMPLETADA" {{ $tarea['estado'] == 'COMPLETADA' ? 'selected' : '' }}>Completada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success px-4 mt-2">
                <i class="bi bi-save"></i> Actualizar
            </button>

        </form>

    </div>
</div>

@endsection
