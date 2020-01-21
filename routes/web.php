<?php

Route::get('painel/usuarios/testes', 'Painel\UsuarioController@testes');

Route::resource('painel/usuarios', 'Painel\UsuarioController');



Route::group(['namespace' => 'Site'], function(){
    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
    Route::get('/contato', 'SiteController@contato');
    Route::get('/', 'SiteController@index');
});

