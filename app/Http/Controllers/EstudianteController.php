<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return Estudiante::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'mail' => 'required|email',
            'carrera' => 'required'
        ]);

        return Estudiante::create($request->all());
    }

    public function show(Estudiante $estudiante)
    {
        return $estudiante;
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'mail' => 'required|email',
            'carrera' => 'required'
        ]);

        $estudiante->update($request->all());

        return $estudiante;
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return response(null, 204);
    }
}
