<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Oficina;
use Illuminate\Http\Request;

use App\Models\Responsable;

use PDF;
use Alert;
class OficinaController extends Controller
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
            $oficina = Oficina::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('piso', 'LIKE', "%$keyword%")
                ->orWhere('responsable_id', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $oficina = Oficina::latest()->paginate($perPage);
        }

        return view('admin.oficina.index', compact('oficina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $responsables = Responsable::All();
        return view('admin.oficina.create', compact('responsables'));
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
        Oficina::create($requestData);
        toast('Registro Agregado Exitosamente', 'success');
        return redirect('admin/oficina')->with(
            'flash_message',
            'Oficina added!'
        );
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
        $oficina = Oficina::findOrFail($id);

        return view('admin.oficina.show', compact('oficina'));
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
        $oficina = Oficina::findOrFail($id);
        $responsables = Responsable::All();
        return view('admin.oficina.edit', compact('oficina', 'responsables'));
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

        $oficina = Oficina::findOrFail($id);
        $oficina->update($requestData);
        toast('Registro Modificado Exitosamente', 'success');

        return redirect('admin/oficina')->with(
            'flash_message',
            'Oficina updated!'
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
        Oficina::destroy($id);
        toast('Registro Eliminado Exitosamente', 'success');

        return redirect('admin/oficina')->with(
            'flash_message',
            'Oficina deleted!'
        );
    }
}
