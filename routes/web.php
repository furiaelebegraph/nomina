<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Mail\Markdown;

Route::get('verificar', function () {
    $markdown = new Markdown(view(), config('mail.markdown'));

    return $markdown->render('email.verificar');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('registroUsuarios', 'Auth\UsuariosRegistroController@registroUsuarios')->name('registroUsuarios');
Route::post('registroUsuarios', 'Auth\UsuariosRegistroController@registro');

Route::get('verificarEmailPrimero', 'Auth\UsuariosRegistroController@verificarEmailPrimero')->name('verificarEmailPrimero');

Route::get('verificar/{correo}/{emailtoken}', 'Auth\UsuariosRegistroController@enviarCorreoListo')->name('enviarCorreoListo');

Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@mostarLoginAdmin')->name('admin.login');

	Route::post('/login', 'Auth\AdminLoginController@logear')->name('admin.login.submit');

	Route::get('/', 'AdminController@index')->name('admin.dashboard');

});


Route::post('usuario_logout', 'UsuariosAuth\LoginController@logout');
Route::get('usuario_login', 'UsuariosAuth\LoginController@showLoginForm');
Route::post('usuario_login', 'UsuariosAuth\LoginController@login');

//usuario Routes
Route::group(['middleware'=> 'usu'],function(){
  Route::resource('usuario','\App\Http\Controllers\UsuarioController');
  Route::post('usuario/{id}/update','\App\Http\Controllers\UsuarioController@update');
  Route::get('usuario/{id}/delete','\App\Http\Controllers\UsuarioController@destroy');
  Route::get('usuario/{id}/deleteMsg','\App\Http\Controllers\UsuarioController@DeleteMsg');
});

//nomina Routes
Route::group(['middleware'=> 'admin'],function(){
  Route::resource('nomina','\App\Http\Controllers\NominaController');
  Route::post('nomina/{id}/update','\App\Http\Controllers\NominaController@update');
  Route::get('nomina/{id}/delete','\App\Http\Controllers\NominaController@destroy');
  Route::get('nomina/{id}/deleteMsg','\App\Http\Controllers\NominaController@DeleteMsg');
});
