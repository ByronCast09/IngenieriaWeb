<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    // Mostrar todos los cursos
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos-manager', compact('cursos'));
    }

    // Mostrar formulario para crear un nuevo curso
    public function create()
    {
        return view('create-curso');
    }

    // Guardar un nuevo curso
    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'video_link' => 'nullable|url',
        ]);

        // Crear el curso
        Curso::create($validatedData);

        return redirect()->route('cursos-manager')->with('success', 'Curso creado exitosamente.');
    }

    // Mostrar formulario para editar un curso
    public function edit(Curso $curso)
    {
        return view('edit-curso', compact('curso'));
    }

    // Actualizar un curso
    public function update(Request $request, Curso $curso)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'video_link' => 'nullable|url',
        ]);

        // Actualizar el curso
        $curso->update($validatedData);

        return redirect()->route('cursos-manager')->with('success', 'Curso actualizado exitosamente.');
    }

    // Eliminar un curso
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos-manager')->with('success', 'Curso eliminado exitosamente.');
    }
}
