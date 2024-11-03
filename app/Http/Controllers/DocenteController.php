<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        return Docente::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'mail' => 'required|email|unique:docentes',
            'especialidad' => 'required|string'
        ]);

        return Docente::create($request->all());
    }

    public function show(Docente $docente)
    {
        return $docente;
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'mail' => 'required|email|unique:docentes,mail,' . $docente->id,
            'especialidad' => 'required|string'
        ]);

        $docente->update($request->all());

        return $docente;
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();

        return response(null, 204);
    }
}
