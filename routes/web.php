<?php

Route::get('/', 'ProformasController@index')->name('home');

Route::get('/proformas/create', 'ProformasController@create');
Route::get('/proformas/{proforma}', 'ProformasController@show');
Route::get('/proformas', 'ProformasController@index');
Route::post('/proformas', 'ProformasController@store');

Route::get('/proformas/{proforma}/servicio', 'ServicioController@create');
Route::post('/proformas/{proforma}/servicio', 'ServicioController@store');

Route::get('/servicios', 'ServicioController@index');

Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/create', 'ClientesController@create');
Route::post('/clientes', 'ClientesController@store');
Route::get('/clientes/{cliente}', 'ClientesController@show');

Route::get('/proveedores', 'ProveedoresController@index');
Route::get('/proveedores/create', 'ProveedoresController@create');
Route::get('/proveedores/consultar/{proveedor}', 'ProveedoresController@consultar');
Route::post('/proveedores', 'ProveedoresController@store');

Route::get('/users', 'RegistrationController@index');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
