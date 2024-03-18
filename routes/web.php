<?php

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FichaTecnica;
use App\Http\Controllers\FichaTecnicaController;
use App\Http\Controllers\TipoTransaccionController;
use App\Http\Controllers\TipoInmuebleController;
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




});

// Otras rutas que no requieren autenticación

Route::get('/', function () {
    return view('welcome');
});

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
