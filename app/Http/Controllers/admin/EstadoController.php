<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Estado;
use Illuminate\Http\Request;

use PDF;
use Alert;

class EstadoController extends Controller
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
            $estado = Estado::where('descrip', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $estado = Estado::latest()->paginate($perPage);
        }

        return view('admin.estado.index', compact('estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.estado.create');
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

        Estado::create($requestData);
        toast('Registro Agregado Exitosamente', 'success');

        return redirect('admin/estado')->with('flash_message', 'Estado added!');
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
        $estado = Estado::findOrFail($id);

        return view('admin.estado.show', compact('estado'));
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
        $estado = Estado::findOrFail($id);

        return view('admin.estado.edit', compact('estado'));
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

        $estado = Estado::findOrFail($id);
        $estado->update($requestData);
        toast('Registro Modificado Exitosamente', 'success');

        return redirect('admin/estado')->with(
            'flash_message',
            'Estado updated!'
        );
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
        Estado::destroy($id);
        toast('Registro Eliminado Exitosamente', 'success');

        return redirect('admin/estado')->with(
            'flash_message',
            'Estado deleted!'
        );
    }
}
