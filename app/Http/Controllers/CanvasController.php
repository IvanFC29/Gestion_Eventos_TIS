<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CanvasController extends Controller
{
    public function index($image){
        return view('lienzo.canvas', ['image' => $image]);
    }

}
