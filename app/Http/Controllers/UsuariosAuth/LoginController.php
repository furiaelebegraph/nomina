<?php

namespace App\Http\Controllers\UsuariosAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;
    protected function guard()
    {
      return Auth::guard('usu');
    }
	public function showLoginForm(){
        return view('auth.usuarioLogin');
    }
}
