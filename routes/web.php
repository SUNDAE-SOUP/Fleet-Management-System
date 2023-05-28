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

//routes for the admin 
Route::get('/admin/dashboard', function () {
    return view('components/admin/section/admin-dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/for-approval', function () {
    return view('components/admin/section/admin-for-approval');
})->middleware(['auth'])->name('for-approval');

Route::get('/admin/history', function () {
    return view('components/admin/section/admin-history');
})->middleware(['auth'])->name('history');

Route::get('/admin/car-repair-history', function () {
    return view('components/admin/section/admin-car-repair-history');
})->middleware(['auth'])->name('car-repair-history');

Route::get('/admin/settings', function () {
    return view('components/admin/section/admin-settings');
})->middleware(['auth'])->name('settings');

Route::get('/admin/help', function () {
    return view('components/admin/section/admin-help');
})->middleware(['auth'])->name('help');


//routes for the user
Route::get('/user/dashboard', function () {
    // return view('dashboard');
    return view('components/user/section/user-dashboard');
})->middleware(['auth'])->name('user-dashboard');

Route::get('/user/send-request', function () {
    // return view('dashboard');
    return view('components/user/section/user-send-request');
})->middleware(['auth'])->name('user-send-request');

Route::get('/user/history', function () {
    // return view('dashboard');
    return view('components/user/section/user-history');
})->middleware(['auth'])->name('user-history');

Route::get('/user/car-repair-history', function () {
    // return view('dashboard');
    return view('components/user/section/user-car-repair-history');
})->middleware(['auth'])->name('user-car-repair-history');

Route::get('/user/settings', function () {
    // return view('dashboard');
    return view('components/user/section/user-settings');
})->middleware(['auth'])->name('user-settings');

Route::get('/user/help', function () {
    // return view('dashboard');
    return view('components/user/section/user-help');
})->middleware(['auth'])->name('user-help');

require __DIR__.'/auth.php';
