<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * INDEX
     */
    public function index()
    {
        $carreras = Carrera::all();
        return view('admin.carreras.index', compact('carreras'));
    }

    /**
     * CREATE-CREAR
     */
    public function create()
    {
        return view('admin.carreras.create');
    }

    /**
     * STORE
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Carrera::create($request->all()); 

        return redirect()->route('admin.carreras.index')
            ->with('mensaje', 'Carrera creada correctamente')
            ->with('icono', 'success');
    }

    /**
     * SHOW
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * EDIT
     */
    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id); // Encuentra la carrera por ID
        return view('admin.carreras.edit', compact('carrera'));
    }

    /**
     * UPDATE-EDITAR
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $carrera = Carrera::findOrFail($id); // Encuentra la carrera por ID
        $carrera->update($request->all()); // Actualiza los datos de la carrera

        return redirect()->route('admin.carreras.index')
            ->with('mensaje', 'Carrera actualizada correctamente')
            ->with('icono', 'success');
    }

    /**
     * DESTROY-ELIMINAR
     */
    public function destroy($id)
    {
        $carrera = Carrera::findOrFail($id); // Encuentra la carrera por ID
        $carrera->delete(); // Elimina la carrera

        return redirect()->route('admin.carreras.index')
            ->with('mensaje', 'Carrera eliminada correctamente')
            ->with('icono', 'success');
    }
}
