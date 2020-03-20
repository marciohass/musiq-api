<?php

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::apiResource('categorias', 'api\CategoriaController');
//Route::apiResource('ajudas', 'api\AjudaController');
//Route::apiResource('benvindos', 'api\BemvindoController');
//Route::apiResource('midias', 'api\MidiaController');
//Route::apiResource('privacidades', 'api\PrivacidadeController');
//Route::apiResource('servicos', 'api\ServicoController');
//Route::apiResource('bandas', 'api\BandaController');
//Route::apiResource('discografias', 'api\DiscografiaController');
//Route::apiResource('musicas', 'api\MusicaController');

Route::post('auth/login', 'api\AuthController@login');
Route::post('auth/refresh', 'api\AuthController@refresh');
Route::post('auth/logout', 'api\AuthController@logout');

Route::group(['middleware' => 'jwt.auth', 'namespace' => 'api\\'], function() {
    Route::get('auth/me', 'AuthController@me');

    Route::get('ajudas', 'AjudaController@index');
    Route::put('ajudas/{id}', 'AjudaController@update');
    Route::post('ajudas', 'AjudaController@store');
    Route::delete('ajudas/{id}', 'AjudaController@destroy');

    Route::get('categorias', 'CategoriaController@index');
    Route::post('categorias', 'CategoriaController@store');
    Route::put('categorias/{id}', 'CategoriaController@update');
    Route::delete('categorias/{id}', 'CategoriaController@destroy');

    Route::get('benvindos', 'BemvindoController@index');
    Route::post('benvindos', 'BemvindoController@store');
    Route::put('benvindos/{id}', 'BemvindoController@update');
    Route::delete('benvindos/{id}', 'BemvindoController@destroy');

    Route::get('midias', 'MidiaController@index');
    Route::post('midias', 'MidiaController@store');
    Route::put('midias/{id}', 'MidiaController@update');
    Route::delete('midias/{id}', 'MidiaController@destroy');

    Route::get('privacidades', 'PrivacidadeController@index');
    Route::post('privacidades', 'PrivacidadeController@store');
    Route::put('privacidades/{id}', 'PrivacidadeController@update');
    Route::delete('privacidades/{id}', 'PrivacidadeController@destroy');

    Route::get('servicos', 'ServicoController@index');
    Route::post('servicos', 'ServicoController@store');
    Route::put('servicos/{id}', 'ServicoController@update');
    Route::delete('servicos/{id}', 'ServicoController@destroy');

    Route::get('bandas', 'BandaController@index');
    Route::post('bandas', 'BandaController@store');
    Route::put('bandas/{id}', 'BandaController@update');
    Route::delete('bandas/{id}', 'BandaController@destroy');

    Route::get('discografias', 'DiscografiaController@index');
    Route::post('discografias', 'DiscografiaController@store');
    Route::put('discografias/{id}', 'DiscografiaController@update');
    Route::delete('discografias/{id}', 'DiscografiaController@destroy');

    Route::get('musicas', 'MusicaController@index');
    Route::post('musicas', 'MusicaController@store');
    Route::put('musicas/{id}', 'MusicaController@update');
    Route::delete('musicas/{id}', 'MusicaController@destroy');
});
