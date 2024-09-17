<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//para cmabiar de pagina 

Route::view('/register', "registro")->name('register');
Route::view('/iniciarSesion', "welcome")->name('iniciarSesion');
Route::view('/Recuperar', "recuperar")->name('Recuperar');

// para las funciones
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');

//par que la paginas se puedan recargar

Route::get('/', function () {
    return view('welcome');
});
