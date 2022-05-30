<?php

namespace App\Http\Controllers;

use App\Models\EstudiantesTabla;
use Illuminate\Http\Request;

/**
 * Class EstudiantesTablaController
 * @package App\Http\Controllers
 */
class EstudiantesTablaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantesTablas = EstudiantesTabla::paginate();

        return view('estudiantes-tabla.index', compact('estudiantesTablas'))
            ->with('i', (request()->input('page', 1) - 1) * $estudiantesTablas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantesTabla = new EstudiantesTabla();
        return view('estudiantes-tabla.create', compact('estudiantesTabla'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstudiantesTabla::$rules);

        $estudiantesTabla = EstudiantesTabla::create($request->all());

        return redirect()->route('estudiantes-tablas.index')
            ->with('success', 'EstudiantesTabla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantesTabla = EstudiantesTabla::find($id);

        return view('estudiantes-tabla.show', compact('estudiantesTabla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantesTabla = EstudiantesTabla::find($id);

        return view('estudiantes-tabla.edit', compact('estudiantesTabla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstudiantesTabla $estudiantesTabla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstudiantesTabla $estudiantesTabla)
    {
        request()->validate(EstudiantesTabla::$rules);

        $estudiantesTabla->update($request->all());

        return redirect()->route('estudiantes-tablas.index')
            ->with('success', 'EstudiantesTabla updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estudiantesTabla = EstudiantesTabla::find($id)->delete();

        return redirect()->route('estudiantes-tablas.index')
            ->with('success', 'EstudiantesTabla deleted successfully');
    }
}
