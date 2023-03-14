<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Activo;
use Illuminate\Http\Request;

use App\Models\Estado;
use App\Models\Oficina;
use App\Models\Grupo;

use PDF;
use Alert;

class ActivoController extends Controller
{
    /**
     * Display a listing of the recurso.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $activo = Activo::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('descrip', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('fechaadq', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('grupo_id', 'LIKE', "%$keyword%")
                ->orWhere('estado_id', 'LIKE', "%$keyword%")
                ->orWhere('oficina_id', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $activo = Activo::latest()->paginate($perPage);
        }

        return view('admin.activo.index', compact('activo'));
    }

    public function reportepdf()
    {
        //dd('hola');
        //crea el PDF
        $activos = Activo::All();
        $view = \View::make('admin/reporte', compact('activos'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->setPaper('A4', 'landscape');
        $pdf->loadHTML($view);
        return $pdf->stream('Registros Activos Fijos.pdf'); //Archivo de descarga
    }

    public function etiquetapdf()
    {
        //dd('hola');
        //crea el PDF
        $activos = Activo::All();
        $view = \View::make('admin/etiqueta', compact('activos'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Etiquetas Activos Fijos.pdf'); //Archivo de descarga
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $grupos = Grupo::All();
        $estados = Estado::All();
        $oficinas = Oficina::All();

        return view(
            'admin.activo.create',
            compact('grupos', 'estados', 'oficinas')
        );
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
        //devuelve el array con todo los datos del formulario
        // array:8 [▼ // app\Http\Controllers\admin\ActivoController.php:95
        //   "_token" => "DKlXfdUMG2b1JdVwOkq7bGnIWpEP58aotUW6izox"
        //   "codigo" => "1234"
        //   "descrip" => "malo"
        //   "precio" => null
        //   "fechaadq" => null
        //   "grupo_id" => "1"
        //   "estado_id" => "1"
        //   "oficina_id" => "1"
        // ]
        $requestData = $request->all();
        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request
                ->file('foto')
                ->store('uploads', 'public');
        }
        // App\Models\Activo {#1316 ▼ // app\Http\Controllers\admin\ActivoController.php:114
        // #connection: "mysql"
        // #table: "activos"
        // #primaryKey: "id"
        // #attributes: array:10 [▼
        //   "codigo" => "1234"
        //   "descrip" => "malo"
        //   "precio" => null
        //   "fechaadq" => null
        //   "grupo_id" => "1"
        //   "estado_id" => "1"
        //   "oficina_id" => "1"
        //   "updated_at" => "2022-12-20 04:42:29"
        //   "created_at" => "2022-12-20 04:42:29"
        //   "id" => 9
        // ]
        // #fillable: array:8 [▶
        //   0 => "codigo"
        //   1 => "descrip"
        //   2 => "precio"
        //   3 => "fechaadq"
        //   4 => "foto"
        //   5 => "grupo_id"
        //   6 => "estado_id"
        //   7 => "oficina_id"
        // ]

        Activo::create($requestData);

        toast('Registro Agregado Exitosamente', 'success');
        return redirect('admin/activo')->with('flash_message', 'Activo added!');
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
        $activo = Activo::findOrFail($id);

        return view('admin.activo.show', compact('activo'));
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
        $activo = Activo::findOrFail($id);
        $grupos = Grupo::All();
        $estados = Estado::All();
        $oficinas = Oficina::All();
        return view(
            'admin.activo.edit',
            compact('activo', 'grupos', 'estados', 'oficinas')
        );
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

        $activo = Activo::findOrFail($id);
        toast('Registro Modificado Exitosamente', 'success');
        $activo->update($requestData);

        return redirect('admin/activo')->with(
            'flash_message',
            'Activo updated!'
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
        Activo::destroy($id);
        toast('Registro Eliminado Exitosamente', 'success');

        return redirect('admin/activo')->with(
            'flash_message',
            'Activo deleted!'
        );
    }
}
