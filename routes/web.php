<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
use App\Models\Producto;

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

Route::get('/', function () {
    $productos=Producto::all();
    return view('welcome',compact("productos"));
});





Route::get("productos",[ProductoController::class,'index']);

Route::get("producto/edit/{producto}",[ProductoController::class,'edit'])->name("producto.editar");

Route::PATCH("producto/update/{producto}",[ProductoController::class,"actualizar"])->name("produco.update");

Route::get("producto/create",[ProductoController::class,'crear'])->name("producto.crear");

Route::get("producto/mostrar/{producto}",[ProductoController::class,'show'])->name("mostrar.producto");

// ruta que guarda un producto 
Route::post("producto/guardar",[ProductoController::class, "store"])->name("producto.store");

Route::get("producto/eliminar",[ProductoController::class, "destroy"])->name("producto.destroy");

// Route::post('/productos',[ProductoController::class,'store'])->name('producto.guardar');
// Route::get('/create', [ProductoController::class,'create']);

route::get("guardar/categoria/ajax",[CategoriaController::class,"guardadoajax"])->name("guardar.categoria.ajax");
route::get("jalar/categorias",[CategoriaController::class,"entregarCategorias"])->name("jalar.categorias");


Route::get("producto/guardar/ajax",[ProductoController::class, "GuardarAjaxProducto"])->name("producto.guardar.ajax");