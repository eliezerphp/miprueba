<?php

// use App\Http\Controllers\Administracion\UsersController;

use App\Http\Controllers\Administracion\UsersController;
use Illuminate\Support\Facades\Route;

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

//Aquí se pega la ruta de AXIOS que se definió en js/components/modulos/usuario/index.vue y llamamos al controlador
// ubicado en http/controllers/Administracion/UsersController, para crearlo y tambiena la carpeta: php artisan make:controller Administracion/UsersController
//


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/administracion/usuario/getListarUsuarios', 'Administracion\UsersController@getListarUsuarios');

Route::get('/administracion/usuario/getListarUsuarios', [UsersController::class, 'getListarUsuarios']);

//optional? es para que sin importar la ruta que se ponga luego de la ruta raiz, regrese a la ruta raiz
Route::get('/{optional?}', function () {
    return view('miprueba');
})->name('basepath');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
