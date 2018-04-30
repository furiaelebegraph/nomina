<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}
    public function mostarLoginAdmin(){
    	return view('auth.admin-login');
    }
    public function logear(Request $request){
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:5'
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password'=> $request->password], $request->remember)) {
    	 	return redirect()->intended(route('admin.dashboard'));
    	 }

    	return redirect()->back()->withInput($request->only('email','remember'));

    }
}
