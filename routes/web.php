<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return inertia('Home',[
       
    ]);
});

Route::get('/users', function () {
    sleep(0.5);
    return inertia('Users',[ 
        'users'=>User::all()->map(fn($user)=>[
            'name' => $user->name
        ])     
    ]);
});

Route::get('/settings', function () {
    return inertia('Settings',[
       
    ]);
});

Route::post('/logout', function () {
    dd(request('foo'));
});