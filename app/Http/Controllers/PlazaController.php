<?php

namespace App\Http\Controllers;

use App\Models\plaza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas = plaza::paginate(3);
        return view('plazas/index', compact('plazas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plazas = plaza::paginate(3);
        return view('plazas/create', compact('plazas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'max:15|required|unique:plazas',
            'nombrePlaza' => 'required|min:3|unique:plazas',
        ]);
        plaza::create($request->all());
        
        session()->flash('status', 'se ha insertado la plaza '.$request->input('nombrePlaza'));
        return redirect()->route('plazas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(plaza $plaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plaza $plaza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plaza $plaza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plaza $plaza)
    {
       $plaza->delete();
       session()->flash('status', 'se ha eliminado la plaza '.$plaza->id);
       return redirect()->route('plazas.index');
    }
}
