<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;

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
<<<<<<< HEAD
// para shop(Comercio )
Route::view('/comercio',"PaginasHome.comercio")->name('comercio');
//para shop-detail
Route::view('/shop-detail',"PaginasHome.shop-detail")->name('shop-detail');
//prueba

=======
//prueba



>>>>>>> 3fe0412c25c68b7a495a0d75a6240f1c1cf05b7f
Route::view('/privada', "private")->middleware('auth')->name('privada');
Route::view('/perfil', "Perfil.PerfilUsuario")->name('perfil');

// para las funciones
//para el registro 
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
//para el login
Route::post('/iniciar', [LoginController::class,'login'])->name('iniciar');
//Para perfil 
Route::get('/PerfilUsuario', [PerfilController::class, 'mostrarPerfil'])->middleware('auth')->name('PerfilUsuario');

//par que la paginas se puedan recargar

Route::get('/', function () {
    return view('welcome');
});
