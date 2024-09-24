<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamMemberDashboardController;
use App\Http\Middleware\RoleMiddleware;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::resource('projects', TaskController::class);
    });
    Route::group(['middleware' => ['role:Manager']], function () {
        // Routes for Admin
    });
    Route::group(['middleware' => ['role:Team Member']], function () {
        // Routes for Admin
    });
});



require __DIR__.'/auth.php';
