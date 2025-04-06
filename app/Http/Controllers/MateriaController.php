<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('admin.materias.index', compact('materias'));
    }



    public function create()
    {
        $carreras = Carrera::all(); //OBTENGO DE LA TABLA MATERIA SELECT * FROM CARRERA 
        return view('admin.materias.create', compact('carreras'));//MANDA COMO VARIABLE A LA VISTA Y LA VISTA LO RECIBE 
    }

    public function store(Request $request)
    {
        $request->validate([
            'carrera_id' => 'required|exists:carreras,id',
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50',
        ]);

        Materia::create($request->all()); 

        return redirect()->route('admin.materias.index')
            ->with('mensaje', 'Materia creada correctamente')
            ->with('icono', 'success');
    }

   
    public function show($id)
    {
      //  $materia = Materia::find($id); 
       // return view('admin.materias.show', compact('materia'));
    }

    
    public function edit( $id)
    {
         $materia = Materia::find($id); 
         $carreras = Carrera::all(); 
       return view('admin.materias.edit', compact('materia','carreras'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carrera_id' => 'required|exists:carreras,id',
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50',
        ]);

        $materia = Materia::find($id); // Encuentra la carrera por ID
        $materia->update($request->all()); // Actualiza los datos de la carrera

        return redirect()->route('admin.materias.index')
            ->with('mensaje', 'Materia actualizada correctamente')
            ->with('icono', 'success');
    }

    
    public function destroy($id)/*  public function destroy($id) */
    {
        $materia = Materia::find($id); // Encuentra l
        $materia->delete(); // Elimina 

        return redirect()->route('admin.materias.index')
            ->with('mensaje', 'Materia eliminada correctamente')
            ->with('icono', 'success');
    }
}
