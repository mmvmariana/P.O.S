<?php

use Illuminate\Support\Facades\Route;

// Rota: GET /
Route::get('/', function () {
    return response()->json(['hello_url' => '/hello']);
});

// Rota: GET /hello
Route::get('/hello', function () {
    return 'Hello, World!';
});
