<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos= Alumno::paginate(5);
        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumno = new Alumno;
        $alumnos= Alumno::paginate(5);
        return view('alumnos.create',compact('alumnos','alumno'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlumnoRequest $request)
    {
       
        
        Alumno::create([
           $request->validated()
        ]);
      session()->flash('status','El alumno ha sido creado');
      return to_route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
       $alumnos=Alumno::where('id',$alumno->id)->paginate(1);
        return view('alumnos/index',compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $alumnos =Alumno::paginate($perPage=5);
        return view('alumnos.create',compact('alumno','alumnos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlumnoRequest $request, Alumno $alumno)
    {
        $alumno->update([
            $request->validated()
            ]);
            session()->flash('status','El alumno ha sido actualizado');
            return to_route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
       $alumno->delete();
     return redirect()->route('alumnos.index')->with('alumno',$alumno);
    }
}
