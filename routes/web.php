<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

// Index de la pagina autoCrud
Route::get('/',[CrudController::class, "autoCrud"])->name('autoCrud.index');





//Listar Empleados (Pagia principal)
Route::get('/empleados', [CrudController::class , "empleadosIndex"]) -> name("empleados.index");

//Registrar Empleados
Route::post('/registrarEmpleado', [CrudController::class , "empleadoCreate"]) -> name("empleado.create");

//Editar Empleados
Route::post('/editarEmpleado', [CrudController::class , "empleadoUpdate"]) -> name("empleado.update");

//Eliminar Empleados
Route::get('/eliminarEmpleado-{id}', [CrudController::class , "empleadoDelete"]) -> name("empleado.delete");


//Listar Autos
Route::get('/autos', [CrudController::class , "autosIndex"]) -> name("autos.index");

//Registrar Autos
Route::post('/registrarAuto', [CrudController::class , "autoCreate"]) -> name("auto.create");

//Editar Autos
Route::post('/editarAuto', [CrudController::class , "autoUpdate"]) -> name("auto.update");

//Eliminar Autos
Route::get('/eliminarAuto-{id}', [CrudController::class , "autoDelete"]) -> name("auto.delete");



//Listar Clientes
Route::get('/clientes', [CrudController::class , "clientesIndex"]) -> name("clientes.index");

//Registrar Autos
Route::post('/registrarCliente', [CrudController::class , "clienteCreate"]) -> name("cliente.create");

//Editar Autos
Route::post('/editarCliente', [CrudController::class , "clienteUpdate"]) -> name("cliente.update");

//Eliminar Autos
Route::get('/eliminarCliente-{id}', [CrudController::class , "clienteDelete"]) -> name("cliente.delete");