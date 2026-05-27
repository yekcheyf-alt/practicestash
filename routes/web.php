<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //employee management
    Route::get('employee', [\App\Http\Controllers\employeeController::class, 'index'])->name('employee.index');
    Route::get('employee/create', [\App\Http\Controllers\employeeController::class, 'create'])->name('employee.create');
    Route::post('employee/store', [\App\Http\Controllers\employeeController::class, 'store'])->name('employee.store');
    Route::get('employee/{id}/edit', [\App\Http\Controllers\employeeController::class, 'edit'])->name('employee.edit');
    Route::put('employee/{id}/update', [\App\Http\Controllers\employeeController::class, 'update'])->name('employee.update');
    Route::delete('employee/{id}/delete', [\App\Http\Controllers\employeeController::class, 'delete'])->name('employee.delete');

    // student management
    Route::get('student', [\App\Http\Controllers\StudentMngtController::class, 'index'])->name('student.index');
   

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    
});
