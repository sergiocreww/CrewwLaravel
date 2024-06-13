<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        //Validación de los campos
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required',
        ]);


        $usuario = FacadesDB::select('select * from users where correo = ?', [$request->correo]);

        if (empty($usuario)) {
            // Usuario no encontrado
            return back()->withErrors(['correo' => 'Credenciales incorrectas']);
        }


        // return "Hello ";

        if (Auth::loginUsingId($usuario[0]->id)) {
            // Autenticación exitosa
            Auth::User();

            return to_route('equipo');
        }

        // Algo salió mal con la autenticación
        return back()->withErrors(['correo' => 'Error de autenticación']);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function logout()
    {
        Auth::logout();
        return to_route('inicio');
    }
}
