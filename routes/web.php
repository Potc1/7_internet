<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/app', function () {
    return 'app';
});

Route::get('/authors/author/{id}', function ($id) {
    return view('profile', ['id' => $id]);
});