<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Grupo;
use Illuminate\Http\Request;

use PDF;
use Alert;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $grupo = Grupo::where('descrip', 'LIKE', "%$keyword%")
                ->orWhere('vidautil', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $grupo = Grupo::latest()->paginate($perPage);
        }

        return view('admin.grupo.index', compact('grupo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        Grupo::create($requestData);
        toast('Registro Agregado Exitosamente', 'success');

        return redirect('admin/grupo')->with('flash_message', 'Grupo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $grupo = Grupo::findOrFail($id);

        return view('admin.grupo.show', compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id);

        return view('admin.grupo.edit', compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $grupo = Grupo::findOrFail($id);
        $grupo->update($requestData);
        toast('Registro Modificado Exitosamente', 'success');

        return redirect('admin/grupo')->with('flash_message', 'Grupo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Grupo::destroy($id);
        toast('Registro Eliminado Exitosamente', 'success');

        return redirect('admin/grupo')->with('flash_message', 'Grupo deleted!');
    }
}
