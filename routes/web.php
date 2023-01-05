<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
return Inertia::render('Home');
})->name('home');

Route::get('/users', function() {
    return Inertia::render('Users',[
        'time' => now()->toTimeString()
    ]);
})->name('users');

Route::get('/settings', function() {
    sleep(2);
    return Inertia::render('Settings');
})->name('settings');

Route::post('/logout', function() {
    sleep(2);
    dd('logging user out');
})->name('logout');