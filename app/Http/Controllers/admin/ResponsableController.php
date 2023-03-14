<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Responsable;
use Illuminate\Http\Request;

use PDF;
use Alert;

class ResponsableController extends Controller
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
            $responsable = Responsable::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('ci', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $responsable = Responsable::latest()->paginate($perPage);
        }

        return view('admin.responsable.index', compact('responsable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.responsable.create');
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
        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request
                ->file('foto')
                ->store('uploads', 'public');
        }
        Responsable::create($requestData);
        toast('Registro Agregado Exitosamente', 'success');

        return redirect('admin/responsable')->with(
            'flash_message',
            'Responsable added!'
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
        $responsable = Responsable::findOrFail($id);

        return view('admin.responsable.show', compact('responsable'));
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
        $responsable = Responsable::findOrFail($id);

        return view('admin.responsable.edit', compact('responsable'));
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
        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request
                ->file('foto')
                ->store('uploads', 'public');
        }

        $responsable = Responsable::findOrFail($id);
        $responsable->update($requestData);
        toast('Registro Modificado Exitosamente', 'success');

        return redirect('admin/responsable')->with(
            'flash_message',
            'Responsable updated!'
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
        Responsable::destroy($id);
        toast('Registro Eliminado Exitosamente', 'success');

        return redirect('admin/responsable')->with(
            'flash_message',
            'Responsable deleted!'
        );
    }
}
