<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductoController;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ArtesanoController;
use App\Http\Controllers\PublicaController;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\IncluyeController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\PdfController;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerificacionMail;
use Illuminate\Support\Str;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\CatalogoController;

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
Route::view('/Admin', "Admin.Administracion")->name('Administrador');
Route::get('/Administrador', [AdministradorController::class, 'listar'])->name('Administrador.listar');

// NUEVOS USUARIOS CLIENTE, ARTESANO, REPARTIDOR 
Route::view('/NuevoCliente', "Admin.NuevoCliente")->name('NuevoCliente');
Route::post('/validarRegistro', [ClienteController::class,'registroCliente'])->name('validarRegistro');

Route::view('/NuevoArtesano', "Admin.NuevoArtesano")->name('NuevoArtesano');
Route::post('/validarRegistroA', [ArtesanoController::class,'registroArtesano'])->name('validarRegistroA');

Route::view('/NuevoRepartidor', "Admin.NuevoRepartidor")->name('NuevoRepartidor');
Route::post('/validarRegistroR', [RepartidoController::class,'registroRepartidor'])->name('validarRegistroR');


// NUEVA CATEGORIA
Route::view('/NuevaCategoria', "Admin.NuevaCategoria")->name('NuevaCategoria');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

// NUEVA COMUNIDAD
Route::view('/NuevaComunidad', "Admin.NuevaComunidad")->name('NuevaComunidad');
Route::post('/comunidads', [ComunidadController::class, 'store'])->name('comunidads.store');

// CONTROLADORES

// ARTESANOS
Route::resource('artesanos', ArtesanoController::class);
Route::get('/artesanos', [ArtesanoController::class, 'index'])->name('artesanos.index');
Route::delete('/artesanos/{id_artesano}', [ArtesanoController::class, 'destroy'])->name('artesanos.destroy');

Route::prefix('admin')->group(function () {
    Route::get('administracion', [AdministracionController::class, 'index'])->name('Admin.Administracion');
    Route::resource('artesanos', ArtesanoController::class);
});
Route::get('administracion/artesanos/{id_artesano}/edit', [ArtesanoController::class, 'edit'])->name('administracion.artesanos.editartesano');
Route::put('administracion/artesanos/{id_artesano}', [ArtesanoController::class, 'update'])->name('administracion.artesanos.update');
Route::resource('administracion/artesanos', ArtesanoController::class);

Route::get('/administracion/Administrador', [AdministradorController::class, 'listar'])->name('Administrador.listar');

// REPARTIDORES
Route::resource('repartidos', RepartidoController::class);
Route::get('/repartidos', [RepartidoController::class, 'index'])->name('repartidos.index');
Route::delete('/repartidos/{id_repartido}', [RepartidoController::class, 'destroy'])->name('repartidos.destroy');

Route::prefix('admin')->group(function () {
    Route::get('administracion', [AdministracionController::class, 'index'])->name('Admin.Administracion');
    Route::resource('repartidos', RepartidoController::class);
});
Route::get('administracion/repartidos/{id_repartido}/edit', [RepartidoController::class, 'edit'])->name('administracion.repartidos.editrepartidor');
Route::put('administracion/repartidos/{id_repartido}', [RepartidoController::class, 'update'])->name('administracion.repartidos.update');
Route::resource('administracion/repartidos', RepartidoController::class);

// CLIENTES
Route::resource('clientes', ClienteController::class);
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::delete('/clientes/{id_cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::prefix('admin')->group(function () {
    Route::get('administracion', [AdministracionController::class, 'index'])->name('Admin.Administracion');
    Route::resource('clientes', ClienteController::class);
});
Route::get('administracion/clientes/{id_repartido}/edit', [ClienteController::class, 'edit'])->name('administracion.clientes.editcliente');
Route::put('administracion/clientes/{id_repartido}', [ClienteController::class, 'update'])->name('administracion.clientes.update');
Route::resource('administracion/clientes', ClienteController::class);

// PRODUCTOS
Route::resource('productos', ProductoController::class);
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::delete('/productos/{id_cliente}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::prefix('admin')->group(function () {
    Route::get('administracion', [AdministracionController::class, 'index'])->name('Admin.Administracion');
    Route::resource('productos', ProductoController::class);
});
Route::get('administracion/productos/{id_producto}/edit', [ProductoController::class, 'edit'])->name('administracion.productos.editproducto');
Route::put('administracion/productos/{id_producto}', [ProductoController::class, 'updatee'])->name('administracion.productos.update');
Route::resource('administracion/productos', ProductoController::class);

// CATEGORIAS
Route::resource('categorias', CategoriaController::class);
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::delete('/categorias/{id_categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::prefix('admin')->group(function () {
    Route::get('administracion', [AdministracionController::class, 'index'])->name('Admin.Administracion');
    Route::resource('categorias', CategoriaController::class);
});
Route::get('administracion/categorias/{id_categoria}/edit', [CategoriaController::class, 'edit'])->name('administracion.categorias.editcategoria');
Route::put('administracion/categorias/{id_categoria}', [CategoriaController::class, 'update'])->name('administracion.categorias.update');
Route::resource('administracion/categorias', CategoriaController::class);

Route::get('/administracion/Administrador', [AdministradorController::class, 'listar'])->name('Administrador.listar');

// COMUNIDADS
Route::resource('comunidads', ComunidadController::class);
Route::get('/comunidads', [ComunidadController::class, 'index'])->name('comunidads.index');
Route::delete('/comunidads/{id_comunidad}', [ComunidadController::class, 'destroy'])->name('comunidads.destroy');

Route::prefix('admin')->group(function () {
    Route::get('administracion', [AdministracionController::class, 'index'])->name('Admin.Administracion');
    Route::resource('comunidads', ComunidadController::class);
});
Route::get('administracion/comunidads/{id_comunidad}/edit', [ComunidadController::class, 'edit'])->name('administracion.comunidads.editcomunidad');
Route::put('administracion/comunidads/{id_comunidad}', [ComunidadController::class, 'update'])->name('administracion.comunidads.update');
Route::resource('administracion/comunidads', ComunidadController::class);

// MOSTRAR PRODUCTOS DE UN ARTESANO
Route::get('/artesanos/{id_artesano}/productos', [ArtesanoController::class, 'productos'])->name('administracion.artesanos.productos');


//para cmabiar de pagina 
Route::view('/Home', "welcome")->name('Home');
Route::view('/Contactanos', "PaginasHome.Contactanos")->name('contactanos');
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


//-----------------------------------------------------------------------------

Route::get('/lisPublica', [PublicaController::class, 'artesanoP'])->middleware('auth')->name('lisPublica');

Route::middleware('auth')->group(function () {
    //manda a la pagina agregar productos
    Route::get('/agregarProductos', [ProductoController::class, 'artesano_id'])->name('agregarProductos');
    //agrega productos
    Route::post('/registroNuevoProducto', [ProductoController::class, 'adicionar'])->name('registroNuevoProducto');

    //ir a la pagina de modificar producto
    Route::get('/PaginasHome.editarProducto/{id}', [ProductoController::class, 'editar'])->name('productos.editar');
    //modificar producto del artesano
    Route::post('/producto-modificar/{id}', [ProductoController::class, 'update'])->name('producto-modificar');
    //registra la categoria
    Route::post('/validar-registerC', [CategoriaController::class,'registerC'])->name('validar-registerC');
    //manda los datos del aretsano para modificar
    Route::get('/PaginasHome.editarProducto/{id_producto}', [ProductoController::class, 'editar'])->name('productos.editar');
    //eliminar producto
    Route::post('/PaginasHome.eliminarP/{id_producto}', [ProductoController::class, 'eliminarProducto'])->name('eliminarP');
    //muestra el idArtesano y lo manda a la pagina agregarProductos
    Route::get('/lisArtesano', [ArtesanoController::class, 'listaArt'])->name('lisArtesano');
    //lista de clientes y pedidos
    Route::get('/lista.PedidosArtesanos', [CarritoController::class, 'listaPedidos'])->name('lista.PedidosArtesanos');
    //lista de pedidos x cliente
    Route::get('/lisPedidosPxC/{id_cliente}', [CarritoController::class, 'listaPedidosxCliente'])->name('lisPedidosPxC');
    //lista de pedidos pendientes
    Route::get('/lisPedidosP/{id_carrito}', [CarritoController::class, 'listaPedidosPendientes'])->name('lisPedidosP');
    //registro entrega
    Route::post('/registroEntregas', [EntregaController::class,'registerE'])->name('registroEntregas');
    //lista de pedidos anteriores x cliente
    Route::get('/lisPedidosPxCA/{id_cliente}', [CarritoController::class, 'listaPedidosxClienteA'])->name('lisPedidosPxCA');
    //lista de pedidos anteriores
    Route::get('/lisPedidosA/{id_carrito}', [CarritoController::class, 'listaPedidosAnteriores'])->name('lisPedidosA');
});

//******************************************************************************************************* */

//-----------------------------CARRITO Y METODO PAGO-------------------------//



Route::get('/repartidores', [RepartidorController::class, 'listaRepartidor'])->name('repartidores');
//lista de repartidores
//Route::view('/repartidores', "PaginasHome.repartidores")->name('repartidores');


//Route::get('/listaRepartidor',[EntregaController::class,'listaRepartidor'])->name('listaRepartidor');

//-----------------------------CARRITO Y METODO EPAGO-------------------------//

//listar productos en la tienda para añadirlos a carrito

Route::get('/Lista-tienda', [CarritoController::class, 'listarProductos'])->name('carrito.tienda');
Route::get('/Lcarrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');


//listar productos del catalogo
Route::get('/catalogo',[CatalogoController::class, 'Catalogo'])->name('ver.catalogo');
//mostrar el carrito del cliente
Route::get('/carrito',[CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');
//agregar productos al carrito desde catalogo
Route::post('/agregar-producto', [CarritoController::class, 'agregarProducto'])->name('agregar.producto');
//eliminar el proucto del carrito
Route::delete('/carrito/eliminar/{id_producto}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
//actualizar la cantidad desde carrito
Route::post('/update-quantity', [CarritoController::class, 'updateQuantity']);
//vista de pedido
Route::view('/Pedido',"PaginasHome.Pedido")->name('ver.pedido'); //pagina Pedido
//hacer el pedido desde carrito
Route::post('/pedido', [PedidoController::class, 'crearPedido'])->name('pedido.crear');
//ver los detalles del pedido
Route::get('/pedido/detalles/{id_pedido}', [PedidoController::class, 'detalles'])->name('pedido.detalles');

// Ruta para cancelar un pedido
Route::delete('/pedidos/{id_pedido}/cancelar', [PedidoController::class, 'cancelar'])->name('pedido.cancelar');
//vista de los metodos de pago
//Route::view('/Pago',"PaginasHome.MetodoPago")->name('ver.pago');
//mostrar los metodos de pago(manda el id_pedido)
Route::get('/pago/{id_pedido}', [PagoController::class, 'mostrarMetodos'])->name('metodo.pago');
//pagar con tarjeta
Route::post('/tarjeta/agregar', [TarjetaController::class, 'agregarTarjeta'])->name('tarjeta.agregar');
//genra qr
Route::post('/qr', [QrController::class, 'crearQr'])->name('crear.qr');
//pagar con paypal
Route::post('/agregar-paypal', [PaypalController::class, 'agregarPaypal'])->name('agregar.paypal');


//********************************PERFILES-************************************** *//
/*Route::view('/Perfil-Cliente', "Perfil.PerfilUsuario")->name('Perfil-Cliente');
Route::view('/Perfil-Artesano', "Perfil.PerfilArtesano")->name('Perfil-Artesano');
Route::view('/Perfil-Repartidor', "Perfil.PerfilRepartidor")->name('Perfil-Repartidor');*/
Route::view('/Actualizar-PerfilC', "Perfil.ActualizarUsuario")->name('Actualizar-PerfilC');
Route::view('/Actualizar-PerfilA', "Perfil.ActualizarArtesano")->name('Actualizar-PerfilA');
Route::view('/Actualizar-PerfilR', "Perfil.ActualizarRepartidor")->name('Actualizar-PerfilR');
//********************************************************************** */




//--------------vizualizar la lista de productos, agregar nuevo y detalles
/*//Route::view('/agregarProductos', "PaginasHome.agregarProductos")->name('agregarProductos');
//Route::view('/lisProductos', "PaginasHome.lisProductos")->name('lisProductos');
Route::post('/validar-registroP', [ProductoController::class,'registerP'])->name('validar-registroP');
Route::get('/agregar-productos', [ProductoController::class, 'agregarProductos'])->name('PaginasHome.agregarProductos');
Route::get('/PaginasHome.editarProducto/{id}', [ProductoController::class, 'editar'])->name('productos.editar');
Route::post('/producto-modificar/{id}', [ProductoController::class, 'update'])->name('producto-modificar');
Route::get('/productos', [ProductoController::class, 'listaP'])->name('PaginasHome.lisProductos');
Route::get('/lisProductos', [ProductoController::class, 'listaP'])->name('lisProductos');*/
//Route::get('/productos{id}', [TuControlador::class, 'eliminar'])->name('eliminarProducto');


//--------------------------------------------------------------------------------

//----------------------------------------------COMERCIO------------------------------------------------//

Route::get('/Lista-Productos-Comercio', [GaleriaController::class, 'listaP'])->name('Lista-Productos-Comercio');

Route::get('/DetalleProducto/{id}' , [GaleriaController::class, 'VerDetalle'])->name('Ver.Detalle.Producto');

//-----------------------------------------------------------------------------------------------//


Route::view('/DetalleProductos', "PaginasHome.DetalleProductos")->name('DetalleProductos');

Route::view('/MetodoPagado', "PaginasHome.DetalleProductos")->name('MetodoPagado');

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

