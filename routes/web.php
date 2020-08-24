<?php

use Illuminate\Support\Facades\Route;
use App\Models\Users;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/all',function (){
	return view('about',['data'=> Users::all()]);
})->name('usersData');


