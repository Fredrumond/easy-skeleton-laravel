@extends('adminlte::page')

@section('title', 'Novo Documento')

@section('content_header')
    <h1>Inserir documento</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('documentos.index')}}">Documentos</a></li>
      <li><a href="#">Inserir Documento</a></li>
    </ol>
@stop

@section('content')
	            
  	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <strong>Oops!</strong> Houve alguns problemas com a sua entrada.<br><br>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Adicionar documento</h3>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		        <form method="POST" action="{{ route('documentos.store')}}"  role="form" enctype="multipart/form-data">
		        {{ csrf_field() }}
		        <div class="row">
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                    <input type="text" name="nome" id="nome" class="form-control input-sm" placeholder="Nome" value="{{ old('nome') }}">
		                </div>
		            </div>
		             <div class="col-xs-6 col-sm-6 col-md-6">
		                <input type="file" name="arquivo">
		            </div>
		            <br>
		        </div>

		         <div class="row">        
		            <div class="col-xs-12 col-sm-12 col-md-12">
		                <input type="submit"  value="Salvar" class="btn btn-success ">
		                <a href="{{ route('documentos.index') }}" class="btn btn-info" >Cancelar</a>
		            </div>
		         </div>
		        </form>
		    </div>
		</div>
	</div>
    
@stop