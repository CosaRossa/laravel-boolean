<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/blog', function () {
  return view('blog');
}) -> name('blog');

Route::get('/molisana', function () {
  $data = config('molisana.data','[]');
  return view('molisana', compact('data'));
}) -> name('molisana');
