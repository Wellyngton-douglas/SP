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
Route::get('/login','LoginController@login') -> name('site.login');

Route::prefix('/app')->group(function() {
  Route::get('/clientes', function() {return 'Clientes';});//'ClientesController@clientes') -> name('app.clientes');
  Route::get('/fornecedores', 'FornecedorController@index') -> name('app.fornecedores');
  Route::get('/produtos', function() {return 'Produtos';});//'ProdutosController@produtos') -> name('app.produtos');
});

Route::get('/test/{p1}/{p2}','TestController@test') -> name('site.test');

Route::fallback(function() {
  echo "Pagina acessada ainda não está disponivel. <a href=".route('site.index')."> Clique aqui</a> para ir a pagina inicial";
});