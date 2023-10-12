<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventviewController extends Controller
{
    //
    public function index(){
        return view('eventos.index');
    }

    public function show(){
        //return view('eventos.show');
        return "Hola";
    }

    public function create(){
        //return view('eventos.create');
        return "Hola";
    }
}
