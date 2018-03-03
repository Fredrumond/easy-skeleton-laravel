<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
	$this->get('/', 'AdminController@index')->name('admin.home');	
	$this->resource('documentos','DocumentController');
	$this->resource('usuarios','UserController');
	$this->resource('usuarios-grupo','UserGroupController');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();
