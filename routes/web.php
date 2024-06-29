<?php

use App\Http\Controllers\AditivoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnsayoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YacimientoController;
use App\Http\Controllers\EquiposController;
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
Route::post('/ensayo/perdida', [EnsayoController::class, 'store_perdida'])->name('store_perdida');
Route::post('/ensayo/bombeabilidad', [EnsayoController::class, 'store_bombeabilidad'])->name('store_bombeabilidad');
Route::post('/ensayo/uca', [EnsayoController::class, 'store_uca'])->name('store_uca');
Route::post('/ensayo/agua_libre', [EnsayoController::class, 'store_agua_libre'])->name('store_agua_libre');
Route::post('/ensayo/mezclabilidad', [EnsayoController::class, 'store_mezclabilidad'])->name('store_mezclabilidad');
Route::post('/ensayo/generate/{solicitud_id}', [EnsayoController::class, 'assignedReporteSolicitud'])->name('assignedReport');
Route::post('/ensayo/pdf/{solicitud_id}', [EnsayoController::class, 'pdfReport'])->name('pdfReport');

# G
Route::get('/check_report/{solicitud_id}', [SolicitudController::class, '_generate_report'])->name('check_report');


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
Route::post('/solicitud/edicion/lechada', [SolicitudController::class, 'update_lechada'])->name('solicitud.update.lechada');

# Lodo


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
Route::post('/cliente/deshabilitar', [ClienteController::class, 'deshabilitar'])->name('cliente.deshabilitar');

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
Route::post('/yacimiento/deshabilitar', [YacimientoController::class, 'deshabilitar'])->name('yacimiento.deshabilitar');


# Aditivos
Route::get('/aditivos', [AditivoController::class, 'index'])->name('aditivos');
Route::post('/aditivo', [AditivoController::class, 'store'])->name('aditivo.store');
Route::post('/aditivo/update', [AditivoController::class, 'update'])->name('aditivo.update');
Route::post('/aditivo/deshabilitar', [AditivoController::class, 'deshabilitar'])->name('aditivo.deshabilitar');


#Equipos
Route::get('/equipos', [EquiposController::class, 'index'])->name('equipos');
Route::post('/equipo', [EquiposController::class, 'store'])->name('equipos.store');
Route::post('/equipo/update', [EquiposController::class, 'update'])->name('equipos.update');
Route::post('/equipo/deshabilitar', [EquiposController::class, 'deshabilitar'])->name('equipos.deshabilitar');



# Permisos
Route::get('/permisos', [PermisosController::class, 'index'])->name('permisos');
Route::post('/permiso', [PermisosController::class, 'store'])->name('permiso.store');
Route::post('/permisos_user', [PermisosController::class, 'user_permission_store'])->name('permisos.user.store');
Route::get('/testing', [PermisosController::class, 'testing']);

# PDF's
Route::get('/pdf/report/lechada/{solicitud_id}', [PDFController::class, 'pdf_report_lechada'])->name('pdf_report_lechada');
Route::post('/pdf/report/lechada/send/{solicitud_id}', [PDFController::class, 'pdf_send_report_lechada'])->name('pdf_send_report_lechada');
Route::get('/pdf/view', [PDFController::class, 'pdf_view']);
