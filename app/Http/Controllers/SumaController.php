<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function index(){
        return view('inicio',['resultado' => null]);
    }

    public function suma(Request $request){
        $numero1 = request('numero1');
        $numero2 = request('numero2');
        $resultado = $numero1 + $numero2;
        return view('inicio', ['resultado' => $resultado]);
    }

    public function template(){
        return view('template');
    }

    public function tailwind(){
        return view('tailwindCurso');
    }
}
