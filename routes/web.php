<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Abdulmalik',
        'frameworks' => ['Laravel', 'Vue', 'Inertia']
    ]);
});

 

Route::get('/users', function () : \Inertia\Response {
    return Inertia::render('Users');
});

Route::get('/settings', function () : \Inertia\Response {
    return Inertia::render('Settings');
});

Route::get('/test', function() : Void {
    dd('Test');
});