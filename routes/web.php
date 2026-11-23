
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Hello Route
Route::get('/hello', function () {
    return 'Hello Laravel';
});

// Products Route
Route::get('/products/{id}', function ($id) {
    return 'Product ID: ' . $id;
})->whereNumber('id');

// Course Route
Route::get('/courses/{courseId}/students', [CourseController::class, 'students']);

// Student CRUD Routes
Route::resource('students', StudentController::class)
    ->except(['show']);
