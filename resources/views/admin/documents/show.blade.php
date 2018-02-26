@extends('adminlte::page')

@section('title', 'Novo Documento')

@section('content_header')
    <h1>Visualizar documento</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('admin.documento')}}">Documentos</a></li>
      <li><a href="{{ route('documento.show')}}">Visualizar Documento</a></li>
    </ol>
@stop

@section('content')
	
	<div class="box">
		<div class="box-header">
			<p>Adicionar documento</p>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">

		    </div>
		</div>
	</div>
    
@stop