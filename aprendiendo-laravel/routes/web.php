<?php

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
    return view('welcome');
});


Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [
                'middleware' => 'testyear',
		'uses' => 'PeliculaController@detalle',
		'as' => 'detalle.pelicula'
]);

Route::resource('usuario','UsuarioController');

Route::get('/redirigir', 'PeliculaController@redirigir');
Route::get('/redirigir2', 'PeliculaController@redirigir2');
Route::get('/redirigir3', 'PeliculaController@redirigir3');
Route::get('/redirigir3', 'PeliculaController@redirigir3');
Route::get('/formulario', 'PeliculaController@formulario');

Route::post('/recibir', 'PeliculaController@recibir');



/*
GET conseguir datos
POST para guardar datos
PUT actualizar recursos
DELETE Eliminar recursos


*/
/*
Route::get('/mostrar-fecha',function(){
	$titulo = "Esta es la Fecha";
	return view('mostrar-fecha', array(
				'titulo' => $titulo
				));
	});
	
/*	
Route::get('/pelicula/{titulo?}',function($titulo="No hay pelicula seleccionada"){
	return view('pelicula', array(
				'titulo' => $titulo
				));
	
});


Route::get('/pelicula/{titulo}/{year?}',function($titulo="No hay pelicula seleccionada", $year=2019){
	return view('pelicula', array(
				'titulo' => $titulo,
				'year' => $year
				));
	
})->where(array(
	'titulo' => '[a-zA-Z]+',
	'year'   => '[0-9]+'

));

Route::get('/listar-peliculas',function(){
	$titulo = "Listado de peliculas";
	$listado = array('Batman', 'La vida es bella', 'Avengers');
	return view('peliculas.listado')
		->with('titulo', $titulo)
		->with('listado', $listado);
	});

Route::get('/pagina-generica',function(){

	return view('pagina');
});
*/