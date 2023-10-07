<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

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






Route::group(
    [
        'namespace' => 'Admin',
        'prefix' => '/admin',
        'middleware' => ['guest:admin']
    ],
    function () {

        Route::get('login', [LoginController::class, 'getlogin'])->name('get.admin.login');
        Route::post('login', [LoginController::class, 'login'])->name('admin.login');
        Route::get('logout', [LoginController::class, 'logout'])->name('get.admin.logout');
    }
);



Route::group(
    [
        'prefix' => '/admin',
        'middleware' => ['auth:admin']

    ],
    function () {
        Route::get('/', [DashboardController::class,'index'])->name('admin.dashborad');
    }
);
