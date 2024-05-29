<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route untuk menampilkan teks
Route::get('/salam/{nama}', function($nama){
    return "Assalamualaikum $nama";
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menampilkan student
Route::get('admin/student', [StudentController::class, 'index']);

// Route untuk menampilkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk mengirim data student
Route::post('admin/student/store', [StudentController::class, 'store']);

Route::resource('admin/courses', [CoursesController::class, ]);

