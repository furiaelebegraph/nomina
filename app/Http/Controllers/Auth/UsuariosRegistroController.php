/<?php
namespace App\Http\Controllers\Auth;
use Mail;
use App\Mail\verificaCorreoToken;
use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsuariosRegistroController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function registroUsuarios(){
        return view('auth.registroUsuarios');
    }

    protected function validator(Request $request)
    {
        return $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|min:2',
            'direccion' => 'required|min:2',
            'correo' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:5|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function registro(Request $request){

        $this->validator($request);
        $usuario =  new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->nss = $request->nss;
        $usuario->emailtoken = Str::random(40);
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        $thisUser = Usuario::findOrFail($usuario->id);
        $this->enviarCorreoVerificacion($thisUser);
        return view('email.verificaCorreoPrimero');
    }

    public function enviarCorreoVerificacion($thisUser){
        Mail::to($thisUser['correo'])->send(new verificaCorreoToken($thisUser));
    }
    public function enviarCorreoListo($correo, $emailtoken){
        $usuario = Usuario::where(['correo'=>$correo, 'emailtoken'=>$emailtoken ])->first();
        if ($usuario) {
            Usuario::where(['correo'=>$correo, 'emailtoken'=>$emailtoken ])->update(['verficado'=>'1', 'emailtoken'=>NULL]);
            return view('')->
         }else{
            return view('')
         }
    }

    public function verificarEmailPrimero(){
        return view('email.verificaCorreoPrimero');
    }

    
}
