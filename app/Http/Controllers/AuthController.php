<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nombre_usuario', 'contrasena');
        $user = Usuario::where('nombre_usuario', $credentials['nombre_usuario'])
                        ->where('contrasena', $credentials['contrasena'])
                        ->first();

        if ($user) {
            if ($user->administradorSistema) {
                return redirect()->route('admin.index')->with('user_id', $user->id_usuario);
            } elseif ($user->cajero) {
                return redirect()->route('cajero.index')->with('user_id', $user->id_usuario);
            }
            return redirect('/login')->withErrors(['error' => 'Usuario no autorizado']);
        }
        return redirect('/login')->withErrors(['error' => 'Credenciales incorrectas']);
    }
}
