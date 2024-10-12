<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificacionMail;
use Illuminate\Support\Str;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;

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
//
Route::view('/registerCliente', "LoginRegistro.Cliente")->name('registerCliente');
Route::view('/registerArtesano', "LoginRegistro.ArtesanoRegistro")->name('registerArtesano');
Route::view('/registerRepardidor', "LoginRegistro.Repartidor")->name('registerRepardidor');

Route::view('/iniciarSesion', "LoginRegistro.login")->name('login');
Route::view('/Recuperar', "recuperar")->name('Recuperar');
//para lista de producto 
Route::view('/ListaProductos',"PaginasHome.ListaCarrito")->name('ListaProductos');

// para shop(Comercio )
Route::view('/comercio',"PaginasHome.comercio")->name('comercio');
//para shop-detail
Route::view('/shop-detail',"PaginasHome.shop-detail")->name('shop-detail');


//--------------vizualizar la lista de productos, agregar nuevo y detalles
Route::view('/agregarProductos', "PaginasHome.agregarProductos")->name('agregarProductos');
Route::view('/lisProductos', "PaginasHome.lisProductos")->name('lisProductos');

Route::post('/validar-registroP', [ProductoController::class,'registerP'])->name('validar-registroP');
Route::post('/validar-registroCategoria', [ProductoController::class,'registerC'])->name('validar-registroCategoria');

Route::get('/agregar-productos', [ProductoController::class, 'agregarProductos'])->name('PaginasHome.agregarProductos');
Route::get('/PaginasHome.editarProducto/{id}', [ProductoController::class, 'editar'])->name('productos.editar');
Route::post('/producto-modificar/{id}', [ProductoController::class, 'update'])->name('producto-modificar');
Route::get('/productos', [ProductoController::class, 'listaP'])->name('PaginasHome.lisProductos');
Route::get('/lisProductos', [ProductoController::class, 'listaP'])->name('lisProductos');
Route::delete('/productos/{id}', [ProductoController::class, 'eliminar'])->name('EliminarProducto');

//-----------------------------CARRITO Y METODO EPAGO---------------------------//

//listar productos en la tienda para añadirlos a carrito
Route::get('/Lista-tienda', [CarritoController::class, 'listarProductos'])->name('carrito.tienda');
Route::post('/agregar-producto', [CarritoController::class, 'agregarProducto'])->name('agregar.producto');

//--------------------------------------------------------------------------------

//********************************PERFILES-************************************** *//
/*Route::view('/Perfil-Cliente', "Perfil.PerfilUsuario")->name('Perfil-Cliente');
Route::view('/Perfil-Artesano', "Perfil.PerfilArtesano")->name('Perfil-Artesano');
Route::view('/Perfil-Repartidor', "Perfil.PerfilRepartidor")->name('Perfil-Repartidor');*/
Route::view('/Actualizar-PerfilC', "Perfil.ActualizarUsuario")->name('Actualizar-PerfilC');
Route::view('/Actualizar-PerfilA', "Perfil.ActualizarArtesano")->name('Actualizar-PerfilA');
Route::view('/Actualizar-PerfilR', "Perfil.ActualizarRepartidor")->name('Actualizar-PerfilR');
//********************************************************************** */




Route::view('/DetalleProductos', "PaginasHome.DetalleProductos")->name('DetalleProductos');

Route::view('/MetodoPagado', "PaginasHome.Checkout")->name('MetodoPagado');
Route::view('/Galeria', "PaginasHome.Galeria")->name('Galeria');
Route::view('/nosotros', "PaginasHome.Nosotros")->name('nosotros');



Route::view('/Verificacion', "VerificacionToken")->name('Verificacion');
Route::view('/VerImagen','PruebaGmail')->name('VerImagen');


Route::view('/RegistroArtesano','LoginRegistro.ArtesanoRegistro')->name('RegistroArtesano');

//Route::view('/perfil', "Perfil.PerfilUsuario")->middleware('auth')->name('perfil');

//-------------------------------------------------------------------------------
//verificacion de token 
Route::post('/verificar-token', [LoginController::class, 'confirmarCodigo'])->name('verificar.token');




//
//***********************pagias que solo el usuario autentificado puede accedere ***************************
//
//


// ****************************************************para las funciones***************************************
//para el registro 
Route::post('/validar-registro', [LoginController::class,'registerCliente'])->name('validar-registro');
Route::post('/validar-registroA', [LoginController::class,'registerArtesano'])->name('validar-registroA');
Route::post('/validar-registroR', [LoginController::class,'registerRepartidor'])->name('validar-registroR');

//para el login
Route::post('/iniciar', [LoginController::class,'login'])->name('iniciar');
Route::get('/Cerrar-Session', [LoginController::class,'logout'])->middleware('auth')->name('Cerrar-Session');
//Para perfil con in udi enviado

Route::get('/PerfilUsuario', [PerfilController::class, 'mostrarPerfil'])->middleware('auth')->name('PerfilUsuario');

Route::post('/ActualizarPerfil', [PerfilController::class,'Actualizar'])->middleware('auth')->name('ActualizarPerfil');
Route::post('/ActualizarRepartidor', [PerfilController::class,'ActualizarRepartidor'])->middleware('auth')->name('ActualizarRepartidor');
Route::post('/ActualizarArtesano', [PerfilController::class,'ActualizarArtesano'])->middleware('auth')->name('ActualizarArtesano');
//para imagenesç

Route::post('/createfile', [FileController::class,'store'])->name('createfile');


//par que la paginas se puedan recargar

Route::get('/', function () {
    return view('welcome');
});
