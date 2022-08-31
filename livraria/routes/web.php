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
});

Route::get('/livro/novo', 'LivrosController@create');
// ('nome da minha url que será digitada', 'busca no meu controller LivrosController no método create (@create))

Route::post('/livro/novo', 'LivrosController@store')->name('salvar_livro');
//post: enviando informações || name: nome da rota

Route::get('/livros/home', 'LivrosController@show'); //listagem dos registros

Route::get('/livro/delete/{id}', 'LivrosController@destroy')->name('excluir_livro'); //exclusão de registros
// {id}: que id ele vai excluir || || name: nome da rota

Route::get('/livro/edit/{id}', 'LivrosController@edit')->name('editar_livro'); //editando livro 
// {id}: que id ele vai editar || || name: nome da rota

Route::post('/livro/edit/{id}', 'LivrosController@update')->name('atualizar_livro');  //salvando dados após a edição
// {id}: que id ele vai editar/salvar || || name: nome da rota
