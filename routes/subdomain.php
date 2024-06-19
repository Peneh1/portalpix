<?php

use Illuminate\Support\Facades\Route;


//This file hedle all routh for the subdomain


Route::get('/home', function ($subtitle) {
    return view('welcome', [
        'title' => 'welcome to ' . $subtitle
    ]);
});