<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/', function () {
    return view('index');
});


Route::get('/demo/{Name}/{id}', function ($name, $id) {
    $data = compact('name','id');
   return view('demo')->with($data);


});

Route::get('demo1/', function () {
    echo '<h1>previous page</h1>';
});
