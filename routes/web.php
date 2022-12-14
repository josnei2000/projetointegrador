<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro','App\Http\Controllers\CadastroController@cadastro');

Route::get('/teste', function () {
  return view('teste');
});

Route::get('/gerencia',function () {
  return view('gerencia');
});

Route::get('/funcionarios',function () {
  return view('funcionarios');
});

Route::get('/cadastro',function () {
  return view('cadastro');
});

Route::get('/edicaodecardapio',function () {
  return view('edicaodecardapio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
  Route::resource('user', App\Http\Controllers\UserController::class);
  Route::resource('product', App\Http\Controllers\ProductControler::class);
  Route::resource('menu', App\Http\Controllers\MenuController::class);
  Route::resource('menu.product', App\Http\Controllers\MenuProductcontroller::class)
    ->only(['store', 'destroy']);
  Route::get('/cardapio/{menu}', 'App\http\Controllers\Menucontroller@showPublic')->name('menu.public.show');

});
