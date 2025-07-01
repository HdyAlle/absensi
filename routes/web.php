<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
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
})->name('admin.index')->middleware('auth');

// Route attendance - UPDATE INI
Route::get('admin/attendance', function () {
    return view('admin.attendance.index');  // Sesuaikan dengan lokasi file
})->name('admin.attendance.index')->middleware('auth');

// Route company
Route::get('admin/company', function () {
    return view('admin.company.index');
})->name('admin.company.index')->middleware('auth');

// Route area
Route::get('admin/area', function () {
    return view('admin.area.index');
})->name('admin.area.index')->middleware('auth');

// Route employee
Route::get('admin/employee', function () {
    return view('admin.employee.index');
})->name('admin.employee.index')->middleware('auth');

// Route departments
Route::get('admin/departments', [DepartmentController::class, 'index'])
    ->name('admin.departments.index')
    ->middleware('auth');

// Route dashboard employee
Route::get('employee/index', function () {
    return view('employee.index');
})->name('employee.index')->middleware('auth');