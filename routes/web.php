<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LeadManagementController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StuffController;
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

// Clear cache
Route::get('clear', function () {
    Artisan::call('optimize:clear');
    return "Optimize clear has been successfully";
});

Route::get('/', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login-check', [AuthController::class, 'loginCheck'])->name('admin.login.check');  //login check
Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('admin.forget.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('admin.change.password');
Route::get('forget-password/show', [ForgetPasswordController::class, 'forgetPasswordShow'])->name('admin.forget.password.show');
Route::get('reset-password/{id}/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('admin.reset.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('admin.change.password');

Route::group(['middleware' => ['admin'], 'prefix'=>'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');


    Route::prefix('password')->group(function () {
        Route::get('/', [ProfileController::class, 'password'])->name('admin.password'); // password change
        Route::post('/update', [ProfileController::class, 'passwordUpdate'])->name('admin.password.update'); // password update
    });

    Route::resources([
        'users' => UserController::class,
        'stuffs' => StuffController::class,
        'leads' => LeadManagementController::class,
    ]);
    //  users Routes
    Route::prefix('users')->group(function () {
        Route::get('/users-delete/{id}', [UserController::class, 'delete'])->name('users.delete');
    });
    Route::get('/changeUserstatus', [UserController::class, 'changeUsersStatus'])->name('users.change-status');

    // Stuff Routes
    Route::get('/changeStaffstatus', [StuffController::class, 'changeStuffsStatus'])->name('stuffs.change-status');
    Route::prefix('stuffs')->group(function () {
        Route::get('/staff-delete/{id}', [StuffController::class, 'delete'])->name('stuffs.delete');
    });

    // leads route
    Route::prefix('leads')->group(function () {
        Route::get('/leads-delete/{id}', [LeadManagementController::class, 'delete'])->name('leads.delete');
    });
    Route::get('/leads-assign', [LeadManagementController::class, 'leadsAssign'])->name('leads.assign');

});
