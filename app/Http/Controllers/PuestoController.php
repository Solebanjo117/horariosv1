<?php

namespace App\Http\Controllers;

use App\Models\puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros=puesto::paginate(10);
        return view('puestos.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('puestos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        puesto::create($request->all());
        return redirect()->route('puestos.index')->with('status','El puesto se ha guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(puesto $puesto)
    {
        $registros = puesto::where('idPuesto',$puesto->idPuesto)->paginate(1);
        return view('puestos.index',compact('registros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(puesto $puesto)
    {
      return view('puestos.edit',['registro'=>$puesto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, puesto $puesto)
    {
        $puesto->update($request->all());
        session()->flash('alert-type', 'primary'); //Para dar estilo a la alerta
        return redirect()->route('puestos.index')->with('status','El puesto se ha modificado papu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(puesto $puesto)
    {
        $puesto->delete();
        session()->flash('alert-type', 'danger'); //Para dar estilo a la alerta
        return redirect()->route('puestos.index')->with('status','Se ha eliminado correctamente');
    }
}
