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
    return view('welcome');
});

Route::controller(TestingController::class) -> group (function() {

    Route::get('/testing', 'testing');

  

    //if will not use the group::controller itshould be like below
    // Route::delete('/users/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id');


});


//routes for the user 
Route::controller(UserController::class)->group(function () {

    Route::get('/user/{user:email}/edit', 'edit');
 
    Route::put('/user/{user}/update', 'update');
});


Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('logintesting');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
