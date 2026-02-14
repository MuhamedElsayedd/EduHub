<?php

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

// SetLocale middleware is applied globally via bootstrap/app.php

Route::view('/', 'student.home')->name('home');
Route::view('/courses', 'student.courses.index')->name('courses.index');
Route::view('/courses/1', 'student.courses.show')->name('courses.show');
Route::view('/courses/1/learn', 'student.courses.lesson')->name('courses.lesson');
Route::view('/quiz/1', 'student.quiz.show')->name('quiz.show');
Route::view('/dashboard', 'student.dashboard')->name('dashboard');
Route::view('/assignments/submit', 'student.assignments.submit')->name('assignments.submit');
Route::view('/profile', 'student.profile')->name('profile');

// Auth routes placeholder (UI only for now)
Route::view('/login', 'student.home'); 
Route::view('/register', 'student.home');
