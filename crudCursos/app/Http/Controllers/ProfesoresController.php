<?php

namespace App\Http\Controllers;

use App\Model\profesores;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{

    public function index()
    {
        $objetos = profesores::orderBy('id','asc')->paginate(20);
        return view('profesores.index',compact('objetos'));
    }


    public function create()
    {
        return view('profesores.create');
    }


    public function store(Request $profesorRequest)
    {

        $profesor = new profesores;
        $profesor->codigo = $profesorRequest->get('codigo');
        $profesor->nombre = $profesorRequest->get('nombre');
        $profesor->notaEncuesta = $profesorRequest->get('notaEncuesta');
        $profesor->save();

        return redirect()->route('index_profesores_path');
    }


    public function edit($profesor)
    {
        $objeto =  profesores::find($profesor);

        return view('profesores.edit', compact('objeto'));
    }


    public function update(Request $profesor)
    {
        dd($profesor);

        $objeto = profesores::find($profesor->id);

        $objeto->codigo = $profesor->get(codigo);
        $objeto->nombre = $profesor->get(nombre);
        $objeto->notaEncuesta = $profesor->get(notaEncuesta);
        $objeto->save();

        return redirect()->route('index_profesores_path');
    }


    public function delete($profesor)
    {
        $objeto = profesores::find($profesor);
        $objeto->delete();

        return redirect()->route('index_profesores_path');
    }
}
