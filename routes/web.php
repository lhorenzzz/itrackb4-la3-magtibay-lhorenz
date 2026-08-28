<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
Route::get('/books', [BookController::class, 'index']) -> name('books.index');
//this is function index() found in BookController.php

Route::get('/books/featured', [BookController::class, 'featured']) -> name('books.featured'); //this is function featured() found in BookController.php

Route::get('/books/filter/{value?}', [BookController::class, 'filter']) -> name('books.filter'); //this is function filter() found in BookController.php

Route::get('/books/{id}', [BookController::class, 'show']) -> name('books.show'); //this is function show() found in BookController.php
