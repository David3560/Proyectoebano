<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//agregar controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\tipoProductoController;
use App\Http\Controllers\colorProductoController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', function () {
    return view('welcome');
});

//

//
    Route::view('/', 'welcome');
    Route::view('login', 'login');
    Route::view('dashboard', 'dashboard');

//Rutas para los PDF
Route::get('rolusus/pdf', [App\Http\Controllers\RolusuController::class, 'pdf'])->name('rolusus.pdf');

Route::get('usuarios/pdf', [App\Http\Controllers\UsuarioController::class, 'pdf'])->name('usuarios.pdf');


Route::get('empleado/pdf', [App\Http\Controllers\EmpleadoController::class, 'pdf'])->name('empleado.pdf');

Route::get('clientes/pdf', [App\Http\Controllers\ClienteController::class, 'pdf'])->name('clientes.pdf');

Route::get('material/pdf', [App\Http\Controllers\MaterialController::class, 'pdf'])->name('material.pdf');

Route::get('colorProducto/pdf', [App\Http\Controllers\colorProductoController::class, 'pdf'])->name('colorProducto.pdf');

Route::get('catalogo/pdf', [App\Http\Controllers\CatalogoController::class, 'pdf'])->name('catalogo.pdf');

Route::get('tipoProducto/pdf', [App\Http\Controllers\TipoproductoController::class, 'pdf'])->name('tipoProducto.pdf');

Route::get('producto/pdf', [App\Http\Controllers\ProductoController::class, 'pdf'])->name('producto.pdf');
//

Route::resource('clientes', 'App\Http\Controllers\ClienteController');

Route::resource('tipoProducto', 'App\Http\Controllers\tipoProductoController')->middleware('auth');

Route::resource('colorProducto', 'App\Http\Controllers\colorProductoController')->middleware('auth');

Route::resource('material', 'App\Http\Controllers\MaterialController')->middleware('auth');

Route::resource('catalogo', 'App\Http\Controllers\CatalogoController')->middleware('auth');

Route::resource('empleado', 'App\Http\Controllers\EmpleadoController')->middleware('auth');

Route::resource('producto', 'App\Http\Controllers\ProductoController')->middleware('auth');

Route::resource('imagen', ImagenController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rutas tutorial login y proteccion de rutas
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('crud', CrudController::class);

});

Route::resource('ventas', 'App\Http\Controllers\VentasController');


//carrito
Route::get("/ventas/ticket", [App\Http\Controllers\VentasController::class, 'ticket'])->name("ventas.ticket");
Route::get("/cotizacion", [App\Http\Controllers\CotizacionController::class, 'index'])->name("cotizacion.index");
Route::delete("/productoDeVenta", [App\Http\Controllers\CotizacionController::class, 'quitarProductoDeCotizacion'])->name("quitarProductoDeVenta");
Route::post("/terminarOCancelarVenta", [App\Http\Controllers\CotizacionController::class, 'terminarOCancelarVenta'])->name("terminarOCancelarVenta");
Route::post("/productoDeVenta",  [App\Http\Controllers\CotizacionController::class, 'agregarProductoVenta'])->name("agregarProductoVenta");

//usuario de supér admin: email: admin@gmail.com pass: admin123
//usuario cliente> email juan@gm.com pass juan1234
//usuario cliente: email: pepito@gm.com pass:pepito123456
