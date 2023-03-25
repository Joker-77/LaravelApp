<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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
