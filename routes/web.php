<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserSendRequestController;
use App\Http\Controllers\User\UserHistoryController;
use App\Http\Controllers\User\UserCarRepairHistoryController;
use App\Http\Controllers\User\UserSettingsController;
use App\Http\Controllers\User\UserHelpController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminForApprovalController;
use App\Http\Controllers\Admin\AdminHistoryController;
use App\Http\Controllers\Admin\AdminCarRepairHistoryController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AdminHelpController;
use App\Http\Controllers\Admin\VehicleMasterlistController;
use App\Http\Middleware\RedirectIfAuthenticated;
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
    return view('auth/login');
});


//routes for the admin 

//check UserDashboardController and RedirectifAuthenticated
// Route::get('/admin/view', [AdminDashboardController::class, 'index'])->name('admin.view');
Route::middleware(['auth'])->controller(AdminDashboardController::class)->group(function () {
    Route::get('/admin/view','index')->name('admin.view');
    
});
Route::middleware(['auth'])->controller(AdminForApprovalController::class)->group(function () {
    Route::get('/admin/for-approval', "index");
    Route::post('/admin/approved', "approve");
});



Route::middleware(['auth'])->controller(AdminDashboardController::class)->group(function () {
    Route::get('/admin/dashboard', "index");
});

Route::middleware(['auth'])->controller(AdminForApprovalController::class)->group(function () {
    Route::get('/admin/for-approval', "index");
});

Route::middleware(['auth'])->controller(AdminHistoryController::class)->group(function () {
    Route::get('/admin/history', "index");
});

Route::middleware(['auth'])->controller(AdminCarRepairHistoryController::class)->group(function () {
    Route::get('/admin/car-repair-history', "index");
});

Route::middleware(['auth'])->controller(AdminSettingsController::class)->group(function () {
    Route::get('/admin/settings', "index");
});

Route::middleware(['auth'])->controller(AdminHelpController::class)->group(function () {
    Route::get('/admin/help', "index");
});


//for VEHICLE MASTER LIST
Route::scopeBindings()->controller(VehicleMasterlistController::class)->group(function () {
    Route::get('/admin/vehicle-masterlist', 'index');

});






//routes for the user
//check UserDashboardController and RedirectifAuthenticated


// Route::get('/user/view', [UserDashboardController::class, 'getvalue']);

Route::middleware(['auth'])->controller(UserDashboardController::class)->group(function () {
    Route::get('/user/view','index')->name('user.view');
    
});

Route::middleware(['auth'])->controller(UserSendRequestController::class)->group(function () {
    Route::get('/user/send-request', "index");
    Route::post('/user/send-request/submit', "submit");
});





Route::middleware(['auth'])->controller(UserDashboardController::class)->group(function () {
    Route::get('/user/dashboard', "index");
});

Route::middleware(['auth'])->controller(UserSendRequestController::class)->group(function () {
    Route::get('/user/send-request', "index");
});

Route::middleware(['auth'])->controller(UserHistoryController::class)->group(function () {
    Route::get('/user/history', "index");
});

Route::middleware(['auth'])->controller(UserCarRepairHistoryController::class)->group(function () {
    Route::get('/user/car-repair-history', "index");
});

Route::middleware(['auth'])->controller(UserSettingsController::class)->group(function () {
    Route::get('/user/settings', "index");
});

Route::middleware(['auth'])->controller(UserHelpController::class)->group(function () {
    Route::get('/user/help', "index");
});

require __DIR__.'/auth.php';
