<?php

namespace App\Http\Controllers;

use App\Models\MateriasTabla;
use Illuminate\Http\Request;

/**
 * Class MateriasTablaController
 * @package App\Http\Controllers
 */
class MateriasTablaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiasTablas = MateriasTabla::paginate();

        return view('materias-tabla.index', compact('materiasTablas'))
            ->with('i', (request()->input('page', 1) - 1) * $materiasTablas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiasTabla = new MateriasTabla();
        return view('materias-tabla.create', compact('materiasTabla'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MateriasTabla::$rules);

        $materiasTabla = MateriasTabla::create($request->all());

        return redirect()->route('materias-tablas.index')
            ->with('success', 'MateriasTabla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiasTabla = MateriasTabla::find($id);

        return view('materias-tabla.show', compact('materiasTabla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiasTabla = MateriasTabla::find($id);

        return view('materias-tabla.edit', compact('materiasTabla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MateriasTabla $materiasTabla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MateriasTabla $materiasTabla)
    {
        request()->validate(MateriasTabla::$rules);

        $materiasTabla->update($request->all());

        return redirect()->route('materias-tablas.index')
            ->with('success', 'MateriasTabla updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materiasTabla = MateriasTabla::find($id)->delete();

        return redirect()->route('materias-tablas.index')
            ->with('success', 'MateriasTabla deleted successfully');
    }
}
