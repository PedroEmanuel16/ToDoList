<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::user()){
            return redirect()->route('task.index');
        }

        return view('Login.index');
    }

    public function login(LoginRequest $request){
        $data = $request->except('_token');

        if(Auth::attempt($data)){
            return redirect()->route('task.index');
        }

        return redirect()->back()->with(['error' => 'Dados inválidos']);
    }

    public function logout()
    {
        Auth::logout(); 
        return to_route('login'); 
    }
}
