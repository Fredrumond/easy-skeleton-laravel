<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
	$this->get('/', 'AdminController@index')->name('admin.home');
	// $this->get('documentos', 'DocumentController@index')->name('admin.documento');
	// $this->get('documento/inserir', 'DocumentController@insert')->name('documento.inserir');
	// $this->post('documento', 'DocumentController@store')->name('documento.store');
	// $this->get('documento/show/{id}', 'DocumentController@show')->name('documento.show');
	$this->resource('documentos','DocumentController');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();
