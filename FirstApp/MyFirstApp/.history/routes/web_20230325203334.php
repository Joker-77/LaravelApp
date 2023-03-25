<?php

use App\Http\Controllers\HomeController;
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

// Routes define the behavior user interact
// base url
Route::get('/', function () {
    $key = config('services.ses.key');
    return view('welcome');
});

Route::get('/todos', [TodoController::class, 'index'])->name('entity.index');
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todo/create', [TodoController::class, 'store']);
// Route::get('/todos/edit/{entity:title}', [TodoController::class, 'edit']);
Route::get('/todos/edit/{entity}', [TodoController::class, 'edit']);
Route::put('/todos/update/{entity}', [TodoController::class, 'update'])->name('entity.update');
Route::get('/todos/complete/{entity}', [TodoController::class, 'complete'])->name('entity.complete');

Route::get('/home', [HomeController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post(
    '/upload',
    [\App\Http\Controllers\UserController::class, 'uploadImage']
);
// Route::post('/upload', function (Request $request) {
// dd($request->file('image'));
// dd($request->image);
// dd($request->hasFile('image'));
// $request->file('image')->store('images');
// $request->image->store('images', 'public');
//     return 'uploaded';
// });
Route::get('/users', function () {
    return view('home');
});
