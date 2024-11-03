<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    public function index()
    {
        return Informe::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'numero_de_hojas' => 'required|integer',
            'area' => 'required',
            'estudiante_id' => 'required|exists:estudiantes,id'
        ]);

        return Informe::create($request->all());
    }

    public function show(Informe $informe)
    {
        return $informe;
    }

    public function update(Request $request, Informe $informe)
{
    $request->validate([
        'titulo' => 'required',
        'numero_de_hojas' => 'required|integer',
        'area' => 'required',
        'estudiante_id' => 'required|exists:estudiantes,id',
        'docente_id' => 'nullable|exists:docentes,id' // Nueva validación
    ]);

    $informe->update($request->all());

    return $informe;
}

    public function destroy(Informe $informe)
    {
        $informe->delete();

        return response(null, 204);
    }
}
