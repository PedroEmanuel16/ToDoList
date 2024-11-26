<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        if(Auth::user()){
            return redirect()->route('task.index');
        }

        return view('Register.index');
    }

    public function register(RegisterRequest $request){
        $data = $request->only(['name', 'email', 'password']);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('task.index');
    }
}
