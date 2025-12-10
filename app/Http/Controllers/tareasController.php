<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class tareasController extends Controller
{
    public function index(){
        $url = env('URL_SERVER_API') . '/tareas';
        $response = Http::get($url);
        $data = $response->json();

        return view('tareas.index', compact('data'));
    }

    public function create(){
        return view('tareas.create');
    }

    public function store(Request $request){
        $url = env('URL_SERVER_API') . '/tareas';
        $response = Http::post($url, [
            'titulo'       => $request->titulo,
            'descripcion' => $request->descripcion,
            'materia' => $request->materia,
            'estado'      => $request->estado,
        ]);

        return redirect()->route('tareas.index');
    }

     public function destroy($id){
        $url = env('URL_SERVER_API') . '/tareas/' . $id;
        $response = Http::delete($url);

        return redirect()->route('tareas.index');
    }

    public function view($id){
        $url = env('URL_SERVER_API') . '/tareas/' . $id;
        $response = Http::get($url);
        $tarea = $response->json();

        return view('tareas.edit', compact('tarea'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API') . '/tareas/' . $request->id;

        $response = Http::put($url, [
            'titulo'=> $request->titulo,
            'descripcion' => $request->descripcion,
            'materia' => $request->materia,
            'estado' => $request->estado,
        ]);

        return redirect()->route('tareas.index');
    }

}
