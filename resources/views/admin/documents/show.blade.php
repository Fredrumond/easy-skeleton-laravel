@extends('adminlte::page')

@section('title', 'Visualizar Documento')

@section('content_header')
    <h1>Visualizar documento</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('documentos.index')}}">Documentos</a></li>
      <li><a href="#">Visualizar Documento</a></li>
    </ol>
@stop

@section('content')
	
	<div class="box">
		<div class="box-header">			
			<h3 class="box-title">{{$documento->name}}</h3>
              <a href="{{ route('documentos.index') }}" class="btn btn-primary pull-right">Voltar</a>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		    	<div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>Nome:</strong>
		                {{ $documento->name}}
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>Arquivo:</strong>
		                <a href="{{ asset("documentos/{$documento->path}") }}" target="_blank">Visualizar arquivo</a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
    
@stop