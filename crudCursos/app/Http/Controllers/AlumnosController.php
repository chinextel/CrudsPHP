<?php

namespace App\Http\Controllers;

use App\Model\alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{

    public function index()
    {
        //$objetos = alumnos::get();
        $objetos = alumnos::orderBy('id','asc')->paginate(20);
        return view('alumnos.index',compact('objetos'));
    }

    public function create()
    {

        return view('alumnos.create');
    }


    public function store(Request $alumnoRequest)
    {


        $alumno = new alumnos;
        $alumno->codigo = $alumnoRequest->get('codigo');
        $alumno->nombre = $alumnoRequest->get('nombre');
        $alumno->carrera = $alumnoRequest->get('carrera');
        $alumno->save();

        //$alumno = alumnos::create($alumnoRequest->only('codigo','nombre','carrera'));

       return redirect()->route('index_alumnos_path');
    }




    public function edit($alumno)
    {

        $objeto = alumnos::find($alumno);

        return view('alumnos.edit')->with(['alumno'=>$objeto]);
    }


    public function update(Request $alumno)
    {

        $objeto = alumnos::find($alumno->id);

        $objeto->codigo = $alumno->get('codigo');
        $objeto->nombre = $alumno->get('nombre');
        $objeto->carrera = $alumno->get('carrera');
        $objeto->save();

        return redirect()->route('index_alumnos_path');
    }


    public function delete($alumno)
    {
        $objeto = alumnos::find($alumno);
        $objeto->delete();

        return redirect()->route('index_alumnos_path');
    }
}
