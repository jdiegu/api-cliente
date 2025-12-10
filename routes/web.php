<?php

use App\Http\Controllers\tareasController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


Route::get('/', [tareasController::class, 'index'])->name('tareas.index');

Route::get('/tareas', [tareasController::class, 'create'])->name('tareas.create');

Route::post('/tareas', [tareasController::class, 'store'])->name('tareas.store');

Route::get('/tareas/delete/{id}', [tareasController::class, 'destroy'])->name('tareas.delete');

Route::get('/tareas/{id}', [tareasController::class, 'view'])->name('tareas.view');

Route::post('/tareas/update', [tareasController::class, 'update'])->name('tareas.update');