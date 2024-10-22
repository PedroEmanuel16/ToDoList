<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Register.index');
    }

    public function register(Request $request){
        $data = $request->except('_token');

        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed'
            ]
        );

        User::create($data);

        return redirect()->route('task.index');
    }
}
