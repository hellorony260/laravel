<?php

use App\Http\Controllers\demoController;
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

Route::get('/demo', function () {
    return view('test.controler');
});

Route::get('/test/{name}/{boyosh}', [demoController::class, 'index']); // url parameter
Route::get('/info', [demoController::class, 'info']); //input
