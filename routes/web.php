<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
	$this->get('/', 'AdminController@index')->name('admin.home');
	$this->get('documentos', 'DocumentController@index')->name('admin.documento');
	$this->get('documento/inserir', 'DocumentController@insert')->name('documento.inserir');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();
