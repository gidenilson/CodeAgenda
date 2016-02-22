<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->get('/', ['as' => 'agenda.index', 'uses'=>'AgendaController@index']);
$app->get('/{letra}', ['as' => 'agenda.letra', 'uses'=>'AgendaController@index']);



$app->get('/contato/create/', ['as' => 'contato.create', 'uses'=>'PessoaController@create']);
$app->post('/contato/', ['as' => 'contato.store', 'uses'=>'PessoaController@store']);
$app->get('/contato/edit/{id}', ['as' => 'contato.edit', 'uses'=>'PessoaController@edit']);
$app->put('/contato/update/{id}', ['as' => 'contato.update', 'uses'=>'PessoaController@update']);
$app->get('/contato/delete/{id}', ['as' => 'contato.delete', 'uses'=>'PessoaController@delete']);
$app->delete('/contato/{id}', ['as' => 'contato.destroy', 'uses'=>'PessoaController@destroy']);

$app->get('/telefone/delete/{id}', ['as' => 'telefone.delete', 'uses'=>'TelefoneController@delete']);
$app->delete('/telefone/{id}', ['as' => 'telefone.destroy', 'uses'=>'TelefoneController@destroy']);
$app->get('/telefone/create/{pessoa_id}', ['as' => 'telefone.create', 'uses'=>'TelefoneController@create']);
$app->post('/telefone/', ['as' => 'telefone.store', 'uses'=>'TelefoneController@store']);
$app->get('/telefone/edit/{id}', ['as' => 'telefone.edit', 'uses'=>'TelefoneController@edit']);
$app->put('/telefone/update/{id}', ['as' => 'telefone.update', 'uses'=>'TelefoneController@update']);

$app->get('/email/delete/{id}', ['as' => 'email.delete', 'uses'=>'EmailController@delete']);
$app->delete('/email/{id}', ['as' => 'email.destroy', 'uses'=>'EmailController@destroy']);
$app->get('/email/create/{pessoa_id}', ['as' => 'email.create', 'uses'=>'EmailController@create']);
$app->post('/email/', ['as' => 'email.store', 'uses'=>'EmailController@store']);
$app->get('/email/edit/{id}', ['as' => 'email.edit', 'uses'=>'EmailController@edit']);
$app->put('/email/update/{id}', ['as' => 'email.update', 'uses'=>'EmailController@update']);


$app->post('/', ['as' => 'agenda.pesquisa', 'uses'=>'AgendaController@pesquisa']);



