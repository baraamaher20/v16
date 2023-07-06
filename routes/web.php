<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return ('homepage');

// });

// Route::get('/about', function () {
//     return ('about');

// });

// Route::get('/contact', function () {
//     return ('contact');

// });

// home , about , contact , team , serviercs
Route::get('home',function(){
    return 'home';
});

Route::get('about',function(){
    return 'about';
});

Route::get('contact',function(){
    return 'contact';
});

Route::get('team',function(){
    return 'team';
});

Route::post('serviercs',function(){
    return 'serviercs';
});
