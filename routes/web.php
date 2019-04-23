<?php



Route::get('/', function () {  return view('index');});
Route::get('/products', function () {  return view('productos');});
Route::get('/descripcion', function () {  return view('subcategorias');});
Route::get('/servicio', function () {  return view('servicio');});
Route::get('/detalle', function () {  return view('detalle');});

//Rutas de administrador

Route::get('administracion',function (){ return view('admin.index');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
