<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sum/{num1}/{num2}', function ($num1, $num2) {
    return response()->json([
        'num1' => $num1,
        'num2' => $num2,
        'sum' => (int) $num1 + (int) $num2
    ]);
});
