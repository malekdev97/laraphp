<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    sleep(1);

    return Inertia::render('Home', [
        'name' => 'Abdulmalik',
        'frameworks' => ['Laravel', 'Vue', 'Inertia']
    ]);
});

 

Route::get('/users', function () : \Inertia\Response {

    sleep(1);
    return Inertia::render('Users');
});

Route::get('/settings', function () : \Inertia\Response {
    return Inertia::render('Settings');
});

Route::get('/test', function() : Void {
    dd('Test');
});

Route::post('/logout', function() {
    dd('Logging the user out');
});