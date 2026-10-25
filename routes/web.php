<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// --- الصفحة الرئيسية ومسار الترحيب ---
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel';
});

// --- Exercise 4: Route Parameters & Constraints ---
Route::get('/products/{id}', function ($id) {
    return 'Product ID: ' . $id;
})->whereNumber('id');

// --- Exercise 5: Controllers ---
// 1. Student Routes
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show'])->whereNumber('id');
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
Route::get('/students/{id}/edit', function ($id) {
    return 'Edit Student Form for ID: ' . $id;
});

// 2. Course Routes
Route::get('/courses/{courseId}/students', [CourseController::class, 'students']);