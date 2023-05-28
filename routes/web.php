<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;

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
    return view('login');
});

//routes for the admin 
Route::get('/admin', function () {
    return view('layouts/AdminLayout');
});

//routes for the user 
Route::get('/user', function () {
    return view('layouts/UserLayout');
});

Route::controller(UserController::class)->group(function () {

    Route::get('/user/{user:email}/edit', 'edit');
 
    Route::put('/user/{user}/update', 'update');
});


Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('layouts/AdminLayout');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
