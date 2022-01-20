<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

/**
 *
 */
class CursoController extends Controller
{
    /**
     * Function de ver el home del controller.
     *
     * @return string.
     */
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Llamada a la vista de creación de cursos.
     *
     * @return string.
     */
    public function create()
    {
        return view('cursos.create');
    }


    /**
     *
     */
    public function store(StoreCurso $request)
    {
        // Modo manual.
        /* $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        // Modo manual con create.
        /* $curso = Curso::create(
            [
                'name' => $request->name,
                'descripcion' => $request->descripcion,
                'categoria' => $request->categoria,
            ]
        ); */
        // Modo masivo
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);

    }

    /**
     * Show.
     *
     * @return string.
     */
    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }


    /**
     *
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }


    /**
     *
     */
    public function update(Request $request, Curso $curso)
    {
        // Validación de los campos.
        $request->validate(
            [
                'name' => 'required',
                'descripcion' => 'required',
                'categoria' => 'required'
            ]
        );

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
