<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', 
    // ['name' => '<b>ria</b>']
);
});

Route::get('/xxx', function () {
    return "Hello";
})->name('hello');

//redirect
Route::get('/hallo', function () {
    return redirect()->route('hello');
});
//dynamic route
Route::get('/greet/{name}', function ($name) {
    return "Hello " . " " . $name . '!';
});

Route::fallback(function () {
    return 'still somewhere';
});
