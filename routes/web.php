<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Categories;

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

Route::get('/categories', [Categories::class, 'index']);
Route::get('/create-category', [Categories::class, 'create']);
Route::post('/category-store', [Categories::class, 'store']);
Route::get('/edit-category/{id}', [Categories::class, 'edit']);
Route::put('/category-update/{id}', [Categories::class, 'update']);