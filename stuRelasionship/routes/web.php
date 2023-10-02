<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\HColorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\SubjectController;
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

Route::resource('student',StudentController::class);
Route::resource('grade',GradeController::class);
Route::resource('subject',SubjectController::class);
Route::resource('hcolor',HColorController::class);
Route::resource('student.subject',StudentSubjectController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
