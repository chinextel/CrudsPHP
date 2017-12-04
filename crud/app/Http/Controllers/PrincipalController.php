<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        $objetos = Post::get();
        return view('index',compact('objetos'));
    }

    public function create(){
        return view('create');
    }
}
