@extends('layouts.app')
@section('title', 'Listado de Tareas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-light">Tareas</h1>

    <a href="{{ route('tareas.create') }}" class="btn btn-success shadow">
        <i class="bi bi-plus-circle"></i> Nueva Tarea
    </a>
</div>

<div class="card bg-dark text-light border-secondary shadow">
    <div class="card-body">

        <table class="table table-dark table-hover table-striped align-middle rounded overflow-hidden">
            <thead class="table-secondary text-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Materia</th>
                    <th>Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $task)
                <tr>
                    <td>{{ $task['id'] }}</td>
                    <td class="fw-semibold text-white">{{ $task['titulo'] }}</td>
                    <td class="text-white-50">{{ $task['descripcion'] }}</td>
                    <td class="text-white-50">{{ $task['materia'] }}</td>

                    <td>
                        @php 
                            $badge = [
                                'PENDIENTE' => 'warning',
                                'EN PROGRESO' => 'info',
                                'COMPLETADA' => 'success'
                            ][$task['estado']] ?? 'secondary';
                        @endphp

                        <span class="badge bg-{{ $badge }} px-3 py-2">
                            {{ $task['estado'] }}
                        </span>
                    </td>

                    <td class="text-center">

                        <a href="{{ route('tareas.view', $task['id']) }}"
                           class="btn btn-sm btn-outline-info me-1">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>

                        <a href="{{ route('tareas.delete', $task['id']) }}"
                           class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i> Eliminar
                        </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
