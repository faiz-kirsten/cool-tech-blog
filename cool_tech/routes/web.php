<?php

use App\Http\Controllers\ArticleController;
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

// all routes use the ArticleController
Route::get('/', [ArticleController::class, 'index']);

Route::get('/article/{id}', [ArticleController::class, 'show'])->where('id', '[0-9]+'); // this where clause ensures that a number can only be entered for the id

Route::get('/category/{slug}', [ArticleController::class, 'category']);

Route::get('/tag/{slug}', [ArticleController::class, 'tag']);

Route::get('/legal/{subsection}', [ArticleController::class, 'legal'])->where('subsection', '(tos|privacy)');;

Route::get('/search', [ArticleController::class, 'search']);
Route::post('/search', [ArticleController::class, 'search']);
