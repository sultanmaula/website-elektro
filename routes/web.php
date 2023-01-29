<?php

use App\Http\Controllers\CPLController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\IndikatorCPLController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('register', function () {
    return redirect()->route('login');
})->name('register');
Route::get('forgot-password', function () {
    return redirect()->route('login');
})->name('forgot-password');
Route::get('password/reset', function () {
    return redirect()->route('login');
})->name('password-reset');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Middleware All Roles
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    // Matkul
    Route::get('/matkul', [MatkulController::class, 'index'])->name('daftar-matkul');
    Route::get('/matkul/tambah', [MatkulController::class, 'create'])->name('tambah-matkul');
    Route::post('/matkul/store', [MatkulController::class, 'store'])->name('store-matkul');
    Route::get('/matkul/{id}', [MatkulController::class, 'show'])->name('show-matkul');
    Route::get('/matkul/edit/{id}', [MatkulController::class, 'edit'])->name('edit-matkul');
    Route::post('/matkul/update/{id}', [MatkulController::class, 'update'])->name('update-matkul');
    Route::post('/matkul/destroy/{id}', [MatkulController::class, 'destroy'])->name('destroy-matkul');

    // All Matkul
    Route::get('/semua-matkul', [MatkulController::class, 'all_matkul'])->name('all-matkul');

    // CPL
    Route::get('/cpl', [CPLController::class, 'index'])->name('daftar-cpl');
    Route::get('/cpl/tambah', [CPLController::class, 'create'])->name('tambah-cpl');
    Route::post('/cpl/store', [CPLController::class, 'store'])->name('store-cpl');
    Route::get('/cpl/{id}', [CPLController::class, 'show'])->name('show-cpl');
    Route::get('/cpl/{id}/add-matkul', [CPLController::class, 'add_matkul'])->name('add-matkul-cpl');
    Route::post('/cpl/{id}/add-matkul', [CPLController::class, 'store_add_matkul'])->name('store-add-matkul-cpl');
    Route::get('/cpl/edit/{id}', [CPLController::class, 'edit'])->name('edit-cpl');
    Route::post('/cpl/update/{id}', [CPLController::class, 'update'])->name('update-cpl');
    Route::post('/cpl/destroy/{id}', [CPLController::class, 'destroy'])->name('destroy-cpl');

    // Indikator CPL
    Route::get('/indikator-cpl', [CPLController::class, 'index_indikator'])->name('daftar-indikator-cpl');
    Route::get('/indikator-cpl/tambah', [CPLController::class, 'create_indikator'])->name('tambah-indikator-cpl');
    Route::post('/indikator-cpl/store', [CPLController::class, 'store_indikator'])->name('store-indikator-cpl');
    Route::get('/indikator-cpl/edit/{id}', [CPLController::class, 'edit_indikator'])->name('edit-indikator-cpl');
    Route::post('/indikator-cpl/update/{id}', [CPLController::class, 'update_indikator'])->name('update-indikator-cpl');
    Route::post('/indikator-cpl/destroy/{id}', [CPLController::class, 'destroy_indikator'])->name('destroy-indikator-cpl');

    // Middleware Superadmin and Admin roles
    Route::group(['middleware' => ['role:superadmin|admin']], function () {
        // Dosen
        Route::get('/dosen', [DosenController::class, 'index'])->name('daftar-dosen');
    });
    

    // Middleware Superadmin roles
    Route::group(['middleware' => ['role:superadmin']], function () {
        // Users
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/add', [UserController::class, 'add'])->name('add-users');
        Route::post('/users/store', [UserController::class, 'store'])->name('store-users');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('edit-users');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('update-users');
        Route::post('/users/destroy/{id}', [UserController::class, 'destroy'])->name('destroy-users');
        // Roles
        Route::get('/roles', [RoleController::class, 'index'])->name('roles');
        Route::get('/roles/add', [RoleController::class, 'add'])->name('add-roles');
        Route::post('/roles/store', [RoleController::class, 'store'])->name('store-roles');
        Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('edit-roles');
        Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('update-roles');
        Route::post('/roles/destroy/{id}', [RoleController::class, 'destroy'])->name('destroy-roles');
    
        // Permission
        Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');
        Route::get('/permissions/add', [PermissionController::class, 'add'])->name('add-permissions');
        Route::post('/permissions/store', [PermissionController::class, 'store'])->name('store-permissions');
        Route::get('/permissions/edit/{id}', [PermissionController::class, 'edit'])->name('edit-permissions');
        Route::post('/permissions/update/{id}', [PermissionController::class, 'update'])->name('update-permissions');
        Route::post('/permissions/destroy/{id}', [PermissionController::class, 'destroy'])->name('destroy-permissions');
    });
});