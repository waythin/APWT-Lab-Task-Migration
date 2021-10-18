<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/' , [ProductController::class, 'home'])->name('home');
Route::get('/product_list',[ProductController::class, 'product_list'])->name('list');
Route::get('/product_details',[ProductController::class, 'product_details'])->name('details');


Route::get('/product_edit/{id}/{name}',[ProductController::class, 'product_edit']);
Route::post('/product_edit',[ProductController::class, 'product_editS'])->name('editS');

Route::get('/product_add',[ProductController::class, 'product_add'])->name('add');
Route::post('/product_add',[ProductController::class, 'product_addS'])->name('addS');

Route::get('/product_delete/{id}/{name}',[ProductController::class, 'product_delete']);

