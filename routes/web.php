<?php



Route::get('/', function () {  return view('index');});
Route::get('/products', function () {  return view('productos');});
Route::get('/descripcion/{id}','SubcategoryController@descripcion');
Route::get('/servicio', function () {  return view('servicio');});
Route::get('/detalle/{id}','ProductController@view');

//Rutas de administrador

Route::get('administracion',function (){ return view('admin.index');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
