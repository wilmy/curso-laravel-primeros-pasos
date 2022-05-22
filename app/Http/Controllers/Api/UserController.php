<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials))
        {
            $token = Auth::user()->createToken('wercodetoken')->plainTextToken;
            return response()->json($token);
        }

        return response()->json("Usuario y/o contraseña invalido");
    }


    public function logout()
    {
            $token = Auth::user()->tokens()->delete();
        

        return response()->json("Seccion crerrada correctamente");
    }
}
