<?php

use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     echo "Home";
// });

Route::get('/', [TodoController::class, 'index'])->name('homepage');

Route::get('/all-todo', [TodoController::class, 'allTodo'])->name('todos');

Route::get('/complete-todo', [TodoController::class, 'completeTodo'])->name('complete');

Route::post('/store-todo', [TodoController::class, 'storeTodo'])->name('store');