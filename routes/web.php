<?php

use App\Http\Controllers\crudController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

// Route::get('/layeb', function () {
//     return 'hello layeb';
// });
// Route::get('/shorna', function () {
//     return 'hello tania';
// });
// Route::post('/rony', function () {
//     return 'Hello Rony';
// });
// Route::get('/mcet', function () {
//     $f_number = 10;
//     $l_number = 15;

//     return $f_number + $l_number;
// });

// Route::view('/test', 'mcet');
// Route::view('/test-two', 'test.test');
// Route::view('/second', 'test.second');
// Route::view('/s', 'test.s.s');

// Route::get('/third', function () {
//     return view('mcet');
// });

// Route::get('/test', [testController::class, 'index']);
Route::get('/index', [StudentController::class, 'index'])->name('index');
Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::post('/store', [StudentController::class, 'store'])->name('store');
Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');
Route::delete('/delete/{id}', [StudentController::class, 'delete'])->name('delete');



Route::put('/edit', [StudentController::class, 'edit']);
