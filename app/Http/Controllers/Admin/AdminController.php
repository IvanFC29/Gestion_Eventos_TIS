<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function index(){
        return view('admin1.adminpage');
        
    }
    public function login(){
   
       printf("hola");
       
       if (auth()->attempt(request(['email', 'password'])) == false) {
        return back()->withErrors([
            'message' => 'The email or password is incorrect'
        ]);
        }else{
            return redirect()->to('admin.adminpage');
            }
    }
}
