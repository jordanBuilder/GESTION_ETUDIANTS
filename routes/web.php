<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');

Route::get('/students',[StudentController::class, 'index'])->name('students.index');

Route::post('/students', [StudentController::class,'store'])->name('students.store');


Route::get('/students/{id}', [StudentController::class,'show'])->name('students.show');