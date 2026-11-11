
<?php

use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->middleware('auth','admin')
    ->name('admin.dashboard');
Route::get('/events', [EventController::class, 'index'])
    ->middleware('auth')
    ->name('events.index');
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('events', AdminEventController::class)->only([
        'index',
        'create',
        'store'
    ]);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
 