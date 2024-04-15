<?php

use App\Http\Controllers\AditivoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnsayoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YacimientoController;
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

# Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/', function () {
//     return view('welcome');
// });

# Login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout.store');

# Ensayo
Route::get('/ensayo/create', [EnsayoController::class, 'create'])->name('ensayo.create');
Route::get('/ensayos', [EnsayoController::class, 'index'])->name('ensayos');
Route::post('/ensayo/create', [EnsayoController::class, 'store'])->name('ensayo.store');
Route::post('/ensayo/assigned', [EnsayoController::class, 'assigned'])->name('ensayo.assigned');
Route::post('/ensayo/reologia', [EnsayoController::class, 'store_reologia'])->name('store_reologia');

# Solicitudes
# Fractura
Route::get('/solicitud', [SolicitudController::class, 'create'])->name('solicitud.create.show')->middleware('auth');
Route::post('/solicitud', [SolicitudController::class, 'store_fractura'])->name('solicitud.fractura');
Route::post('/solicitud/edicion', [SolicitudController::class, 'update'])->name('solicitud.update');
Route::post('/solicitud/aprobada', [SolicitudController::class, 'store_aprobar'])->name('solicitud.aprobar');
Route::get('/solicitud/fractura/{solicitud_id}', [SolicitudController::class, 'show_fractura'])->name('solicitud.fractura.show');

# Lechada
Route::post('/solicitud/lechada', [SolicitudController::class, 'store_lechada'])->name('solicitud.lechada');
Route::get('/solicitud/lechada/{solicitud_id}', [SolicitudController::class, 'show_lechada'])->name('solicitud.lechada.show');

// Route::get('/send-email', [SolicitudController::class, 'sendEmail']);
Route::get('/send-email', [SolicitudController::class, 'viewMail']);


Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');
Route::post('/respuesta/{user_id}', [SolicitudController::class, 'update_rta'])->name('fundamento.rta');

// Route::post('/solicitud/lodo', [SolicitudController::class, 'store_lodo'])->name('solicitud.lodo');

# Comentarios
// Route::post('/comentario/{user_id}', [ComentarioController::class, 'store'])->name('comentario.store');
// Route::post('/respuesta/{user_id}', [ComentarioController::class, 'update'])->name('comentario.update');

# Clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('cliente.update');

# Usuarios
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios');
Route::post('/create/usuario', [UserController::class, 'store'])->name('usuario.store');
Route::post('/edit/usuario', [UserController::class, 'update'])->name('usuario.update');
Route::post('/usuario/credencial', [UserController::class, 'store_credencial'])->name('usuario.credencial');
Route::post('/usuario/desactivar', [UserController::class, 'store_desactivar'])->name('usuario.desactivar');
Route::post('/usuario/activar', [UserController::class, 'store_activar'])->name('usuario.activar');

# Yacimientos
Route::get('/yacimientos', [YacimientoController::class, 'index'])->name('yacimientos');
Route::post('/yacimiento', [YacimientoController::class, 'store'])->name('yacimiento.store');
Route::post('/yacimiento/update', [YacimientoController::class, 'update'])->name('yacimiento.update');

# Aditivos
Route::get('/aditivos', [AditivoController::class, 'index'])->name('aditivos');
Route::post('/aditivo', [AditivoController::class, 'store'])->name('aditivo.store');
Route::post('/aditivo/update', [AditivoController::class, 'update'])->name('aditivo.update');

# Permisos
Route::get('/permisos', [PermisosController::class, 'index'])->name('permisos');
Route::post('/permiso', [PermisosController::class, 'store'])->name('permiso.store');
Route::post('/permisos_user', [PermisosController::class, 'user_permission_store'])->name('permisos.user.store');
Route::get('/testing', [PermisosController::class, 'testing']);


