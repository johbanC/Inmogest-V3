<?php

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FichaTecnica;
use App\Http\Controllers\FichaTecnicaController;
use App\Http\Controllers\TipoTransaccionController;
use App\Http\Controllers\TipoInmuebleController;
use App\Http\Controllers\CalentadorController;
use App\Http\Controllers\TipoPorteriaController;
use App\Http\Controllers\TipoCocinaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Reorderable;
/*IMPORTAR EL MODELO PARA PODERLO UTILIZAR. PERO DESPUESDE AGREGAR EL 
[InventarioController::class, 'index'] 
YA NO ES NECESARIO
use App\Models\Inventario;
*/

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

/*Ruta principal*/
Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home',  function () {
    return view('auth/login');
});


Route::middleware(['auth'])->group(function () {
    // Rutas que requieren autenticación

    Route::get('/fichastecnicas', [FichaTecnicaController::class, 'index'])
    ->name('fichastecnicas.index');

    Route::get('/fichastecnicas/new', [FichaTecnicaController::class, 'create'])
    ->name('fichastecnicas.new');

    Route::post('/fichastecnicas/new', [FichaTecnicaController::class, 'store'])
    ->name('fichastecnicas.store');

    Route::get('/fichastecnicas/{fichatecnica}/edit', [FichaTecnicaController::class, 'edit'])
    ->name('fichastecnicas.edit');

    Route::put('/fichastecnicas/{fichatecnica}', [FichaTecnicaController::class, 'update'])
    ->name('fichastecnicas.update');

    Route::delete('/fichastecnicas/{fichatecnica}', [FichaTecnicaController::class, 'destroy'])
    ->name('fichastecnicas.destroy');

    Route::get('/fichastecnicas/{fichatecnica}/pdf', [FichaTecnicaController::class, 'pdf'])
    ->name('fichastecnicas.pdf');


    // Tipo de Inmuebles
    Route::get('/tiposinmuebles', [TipoInmuebleController::class, 'index'])
    ->name('tiposinmuebles.index');

    Route::get('/tiposinmuebles/new', [TipoInmuebleController::class , 'create'])
    ->name('tiposinmuebles.new');

    Route::post('tiposinmuebles/new', [TipoInmuebleController::class, 'store'])
    ->name('tiposinmuebles.store');

    Route::get('tiposinmuebles/{tipoinmueble}/edit', [TipoInmuebleController::class, 'edit'])
    ->name('tiposinmuebles.edit');

    Route::put('/tiposinmuebles/{tipoinmueble}', [TipoInmuebleController::class, 'update'])
    ->name('tiposinmuebles.update');

    Route::delete('/tiposinmuebles/{tipoinmueble}', [TipoInmuebleController::class, 'destroy'])
    ->name('tiposinmuebles.destroy');


    // Tipo de TipoTransaccion
    Route::get('/tipostransaccions', [TipoTransaccionController::class, 'index'])
    ->name('tipostransaccions.index');

    Route::get('/tipostransaccions/new', [TipoTransaccionController::class , 'create'])
    ->name('tipostransaccions.new');

    Route::post('tipostransaccions/new', [TipoTransaccionController::class, 'store'])
    ->name('tipostransaccions.store');

    Route::get('tipostransaccions/{tipotransaccion}/edit', [TipoTransaccionController::class, 'edit'])
    ->name('tipostransaccions.edit');

    Route::put('/tipostransaccions/{tipotransaccion}', [TipoTransaccionController::class, 'update'])
    ->name('tipostransaccions.update');

    Route::delete('/tipostransaccions/{tipotransaccion}', [TipoTransaccionController::class, 'destroy'])
    ->name('tipostransaccions.destroy');


    // Tipo de calentador
    Route::get('/calentadors', [CalentadorController::class, 'index'])
    ->name('calentadors.index');

    Route::get('/calentadors/new', [CalentadorController::class , 'create'])
    ->name('calentadors.new');

    Route::post('calentadors/new', [CalentadorController::class, 'store'])
    ->name('calentadors.store');

    Route::get('calentadors/{calentador}/edit', [CalentadorController::class, 'edit'])
    ->name('calentadors.edit');

    Route::put('/calentadors/{calentador}', [CalentadorController::class, 'update'])
    ->name('calentadors.update');

    Route::delete('/calentadors/{calentador}', [CalentadorController::class, 'destroy'])
    ->name('calentadors.destroy');

    // Tipo de Porteria
    Route::get('/tipoporterias', [TipoPorteriaController::class, 'index'])
    ->name('tipoporterias.index');

    Route::get('/tipoporterias/new', [TipoPorteriaController::class , 'create'])
    ->name('tipoporterias.new');

    Route::post('tipoporterias/new', [TipoPorteriaController::class, 'store'])
    ->name('tipoporterias.store');

    Route::get('tipoporterias/{tipoporteria}/edit', [TipoPorteriaController::class, 'edit'])
    ->name('tipoporterias.edit');

    Route::put('/tipoporterias/{tipoporteria}', [TipoPorteriaController::class, 'update'])
    ->name('tipoporterias.update');

    Route::delete('/tipoporterias/{tipoporteria}', [TipoPorteriaController::class, 'destroy'])
    ->name('tipoporterias.destroy');


    // Tipo de Cocinas
    Route::get('/tipococinas', [TipoCocinaController::class, 'index'])
    ->name('tipococinas.index');

    Route::get('/tipococinas/new', [TipoCocinaController::class , 'create'])
    ->name('tipococinas.new');

    Route::post('tipococinas/new', [TipoCocinaController::class, 'store'])
    ->name('tipococinas.store');

    Route::get('tipococinas/{tipococina}/edit', [TipoCocinaController::class, 'edit'])
    ->name('tipococinas.edit');

    Route::put('/tipococinas/{tipococina}', [TipoCocinaController::class, 'update'])
    ->name('tipococinas.update');

    Route::delete('/tipococinas/{tipococina}', [TipoCocinaController::class, 'destroy'])
    ->name('tipococinas.destroy');


    //Listado de clientes
    Route::get('/clientes', [ClienteController::class, 'index'])
    ->name('clientes.index');

    Route::get('/clientes/new', [ClienteController::class , 'create'])
    ->name('clientes.new');

    Route::post('clientes/new', [ClienteController::class, 'store'])
    ->name('clientes.store');

    Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])
    ->name('clientes.edit');

    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])
    ->name('clientes.update');

    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])
    ->name('clientes.destroy');


});

// Otras rutas que no requieren autenticación

/*Ruta principal
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    return view('test.test');
});

Route::get('/inventarios', [InventarioController::class, 'index'])
->name('inventarios.index');

Route::get('/inventarios/new', function () {
    return view('inventarios.new');
})->name('inventarios.new');

Route::post('/inventarios/new', [InventarioController::class, 'store'])
->name('inventarios.store');

// Para ingresar al controlador 
Route::get('/transacciones', 'TipoTransaccionController@index');
