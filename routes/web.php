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
Route::view('/Home', "welcome")->name('Home');
Route::view('/register', "registro")->name('register');
Route::view('/iniciarSesion', "login")->name('login');
Route::view('/Recuperar', "recuperar")->name('Recuperar');
//para lista de producto 
Route::view('/ListaProductos',"PaginasHome.ListaCarrito")->name('ListaProductos');
// para shop(Comercio )
Route::view('/comercio',"PaginasHome.comercio")->name('comercio');
//para shop-detail
Route::view('/shop-detail',"PaginasHome.shop-detail")->name('shop-detail');
//prueba

Route::view('/privada', "private")->middleware('auth')->name('privada');
Route::view('/perfil', "Perfil.PerfilUsuario")->name('perfil');

// para las funciones
//para el registro 
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
//para el login
Route::post('/iniciar', [LoginController::class,'login'])->name('iniciar');

//par que la paginas se puedan recargar

Route::get('/', function () {
    return view('welcome');
});
