<?php

/*
  @rotas para o site

  / <- homepage
  /clientes/ <- clientes do site
  /sobre/ <- sobre a York

  /produtos/ <- todos os produtos
  /produtos/{$categoria}/ <- categoria de um produto
  /produtos/{$categoria}/{$nomeDoProduto} <- produto único


*/

// home
  Route::get('/', 'SiteController@home')->name('home');
// contato
  Route::get('/contato', 'SiteController@contato')->name('contato');
// clientes
  Route::get('/clientes', 'SiteController@clientes')->name('clientes');
// produtos
  Route::get('/produtos', 'ProdutoController@all')->name('produtos');


/*
  @rotas para painel
  /painel/login <- Realizar login

  /painel/home <- Home
  /painel/novo <- formulario adicionar novo produtos

  /painel/novo/gravar <- salvar produto no banco de dados

  /painel/editar/{$id} <- editar um produto
  /painel/editar/gravar <- salvar alterações

  /painel/produtos <- listar todos os produtos
  /painel/produtos/excluir <- excluir um produto do banco de dados

  /painel/mensagens <- mensagens recebidas pelo site

  /painel/clientes <- clientes do site
*/

  // Login
  Route::get('/painel/login', 'PainelController@login')->name('login');

  //
  Route::get('/painel/home', 'PainelController@index')->name('home');

  Route::get('/painel/teste', 'PainelController@teste')->name('teste');
