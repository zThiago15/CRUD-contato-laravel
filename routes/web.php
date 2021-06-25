<?php

use Illuminate\Support\Facades\Route;

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

    //return '<h1> Testando rota </h1>';
});

Route::get('/contatos-view', 'App\Http\Controllers\ContatoController@exibirContatos');

Route::get('/excluir-contato/{id}', 'App\Http\Controllers\ContatoController@destroy');

Route::get('/cadastrar-contato-view', 'App\Http\Controllers\ContatoController@exibirCadastro');

Route::post('/cadastrar-contato/inserir', 'App\Http\Controllers\ContatoController@store');

Route::get('editar-contato/{id}', 'App\Http\Controllers\ContatoController@edit');

Route::post('alterar-contato/{id}', 'App\Http\Controllers\ContatoController@update');

Route::get('contatos-json', 'App\Http\Controllers\ContatoController@showJSON');


Route::get('/quemsomos', function(){
    return view('quemsomos');
});
