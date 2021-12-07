<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ComprasController;
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

Route::get('/User',[UserController::class,'get']);
Route::get('/User/{id}',[UserController::class,'get']);
Route::post('/User',[UserController::class,'post']);
Route::post('/User/{id}/delete',[UserController::class,'delete']);


Route::get('/Produtos',[ProdutosController::class,'get']);
Route::get('/Produtos/{id}',[ProdutosController::class,'get']);
Route::post('/Produtos',[ProdutosController::class,'post']);
Route::post('/Produtos/{id}/delete',[ProdutosController::class,'delete']);


Route::get('/Compras',[ComprasController::class,'get']);
Route::get('/Compra/{id}',[ComprasController::class,'get']);
Route::get('User/{id}/Compras/{preco}',[ComprasController::class,'get']);
Route::post('/Compras',[ComprasController::class,'post']);
Route::post('/Compra/{id}/delete',[ComprasController::class,'delete']);


//Route::post('pessoas/delete', 'PessoasController@delete');
//Route::get('/', function(){
   // return view(view:'User');
//});



//Route::get('/users/{name}', function($name){
//   return "ola".$name;
//});

//Route::get('/user/{id}', function($id){
//   return "ola".$id;
//});