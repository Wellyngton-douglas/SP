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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PrincipalController@principal') -> name('site.index');

Route::get('/sobre-nos','SobreNosController@sobreNos') -> name('site.sobrenos');

Route::get('/contato','ContatoController@contato') -> name('site.contato');
Route::post('/contato','ContatoController@salvar') -> name('site.contato');

Route::get('/login/{erro?}','LoginController@index') -> name('site.login');
Route::post('/login','LoginController@autenticar') -> name('site.login');

Route::middleware('autenticacao:padrao,visitante,p3,p4') -> prefix('/app') -> group(function() {
  Route::get('/home', 'HomeController@index') -> name('app.home');
  Route::get('/sair', 'LoginController@sair') -> name('app.sair');
  Route::get('/cliente', 'ClientesController@index') -> name('app.cliente');
  Route::get('/fornecedor', 'FornecedorController@index') -> name('app.fornecedor');
  Route::get('/produto', 'ProdutoController@index') -> name('app.produto');
});

Route::get('/test/{p1}/{p2}','TestController@test') -> name('site.test');

Route::fallback(function() {
  echo "Pagina acessada ainda não está disponivel. <a href=".route('site.index')."> Clique aqui</a> para ir a pagina inicial";
});