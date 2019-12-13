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
Auth::routes();

Route::get('/sobre', ['as' => 'about', 'uses' => 'HomeController@sobre']);
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');




Route::get('/ofertaTcc',['as'=>'professor.ofertaTcc', 'uses'=>'ProfessorController@index']);
Route::post('/ofertaTcc',['as'=>'professor.ofertaTcc.submit', 'uses'=>'ProfessorController@createOffer']);

Route::get('/tcc/schedule/editar',['uses' =>'TccController@show', 'as'=> 'tcc.schedule.show']);
Route::get('/tcc/schedule/editar/{id}',['uses' =>'TccController@editar', 'as'=> 'tcc.schedule.editar']);
Route::put('/tcc/schedule/atualizar/{id}',['uses' =>'TccController@atualizar', 'as'=> 'tcc.schedule.atualizar']);


Route::get('/tcc',['as'=>'tcc', 'uses'=>'TccController@index']);
Route::get('/tcc/cadastrar', ['as'=>'tcc.create', 'uses'=>'TccController@create']);
Route::post('/tcc/salvar', ['as'=>'tcc.salvar', 'uses'=>'TccController@save']);
Route::get('/alunos',['as'=>'alunos', 'uses'=>'PageController@aluno']);
Route::get('/professores',['as'=>'professores', 'uses'=>'PageController@professor']);
Route::get('/criarTcc/{id}',['as'=>'criar.tcc', 'uses'=>'TccController@criar']);	
Route::post('/criarTcc/{id}',['as'=>'tccs.inscricao', 'uses'=>'TccController@inscricao']);

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

