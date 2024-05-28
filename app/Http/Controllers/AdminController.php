<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $user = Usuario::find($user_id);
        if (!$user || !$user->administradorSistema) {
            return redirect('/login');
        }
        return view('admin.index', ['user' => $user]);
    }
}
