<?php

Route::get('/', 'ProformasController@index')->name('home');

/* Proformas */
Route::get('/proformas', 'ProformasController@index');
Route::get('/proformas/create', 'ProformasController@create');
Route::post('/proformas', 'ProformasController@store');
Route::get('/proformas/{proforma}', 'ProformasController@show');
Route::get('/proformas/{proforma}/eliminar', 'ProformasController@destroy');

/* Servicios */
Route::get('/servicios', 'ServicioController@index');
Route::get('/proformas/{proforma}/servicio', 'ServicioController@create');
Route::post('/proformas/{proforma}/servicio', 'ServicioController@store');
Route::get('/servicios/{servicio}', 'ServicioController@show');
Route::get('/servicios/{servicio}/eliminar', 'ServicioController@destroy');

/* Facturas de servicio */
Route::get('/facturas', 'FacturaServicioController@index');
Route::get('/servicios/{servicio}/factura', 'FacturaServicioController@create');
Route::post('/servicios/{servicio}/factura', 'FacturaServicioController@store');
Route::get('/facturas/{factura}/anular', 'FacturaServicioController@anular');
Route::get('/facturas/{factura}', 'FacturaServicioController@show');
Route::get('/facturas/{factura}/eliminar', 'FacturaServicioController@destroy');

/* Facturas de compra */
Route::get('/compras', 'FacturaCompraController@index');
Route::get('/servicios/{servicio}/compra', 'FacturaCompraController@create');
Route::post('/servicios/{servicio}/compra', 'FacturaCompraController@store');
Route::get('/compras/{compra}/eliminar', 'FacturaCompraController@destroy');
Route::get('/compras/{compra}', 'FacturaCompraController@show');

/* Clientes */
Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/create', 'ClientesController@create');
Route::post('/clientes', 'ClientesController@store');
Route::get('/clientes/{cliente}', 'ClientesController@show');
Route::get('/clientes/{cliente}/deshabilitar', 'ClientesController@deshabilitar');
Route::get('/clientes/{cliente}/habilitar', 'ClientesController@habilitar');

Route::get('/clientes/buscar/{cliente}', 'ClientesController@buscar');

/* Proveedores */
Route::get('/proveedores', 'ProveedoresController@index');
Route::get('/proveedores/create', 'ProveedoresController@create');
Route::post('/proveedores', 'ProveedoresController@store');
Route::get('/proveedores/{proveedor}', 'ProveedoresController@show');
Route::get('/proveedores/consultar/{proveedor}', 'ProveedoresController@consultar');
Route::get('/proveedores/{proveedor}/deshabilitar', 'ProveedoresController@deshabilitar');
Route::get('/proveedores/{proveedor}/habilitar', 'ProveedoresController@habilitar');

Route::get('/proveedores/buscar/{proveedor}', 'ProveedoresController@buscar');

/* Usuarios */
Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{user}/deshabilitar', 'UserController@deshabilitar');
Route::get('/users/{user}/habilitar', 'UserController@habilitar');
Route::post('/users', 'UserController@store');
Route::get('/user/ajustes', 'UserController@editar');
Route::post('/user/ajustes', 'UserController@guardarAjustes');

/* Pagos */
Route::get('/pagos', 'PagosController@index');

// Piezas
Route::get('/pieza/buscar/{nombre}', 'PiezasController@buscar');

/* Autenticación */
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@store');
Route::get('/logout', 'Auth\LoginController@logout');
