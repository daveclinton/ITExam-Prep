<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;


Route::get('/', [CourseController::class, 'welcome'])->name('welcome');


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');