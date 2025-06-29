<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route dashboard admin
Route::get('admin/index', function () {
    return view('admin.index');
})->middleware('auth');

// Route dashboard employee
Route::get('employee/index', function () {
    return view('employee.index');
})->middleware('auth');