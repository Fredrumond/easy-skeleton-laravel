@extends('adminlte::page')

@section('title', 'Editar Documento')

@section('content_header')
    <h1>Editar documento</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('documentos.index')}}">Documentos</a></li>
      <li><a href="#">Editar Documento</a></li>
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
			<h3 class="box-title">{{$documento->name}}</h3>
            <a href="{{ route('documentos.index') }}" class="btn btn-primary pull-right">Voltar</a>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		        <form method="POST" action="{{ route('documentos.update', $documento->id) }}"  role="form" enctype="multipart/form-data">
		        {{ csrf_field() }}
		        <input name="_method" type="hidden" value="PATCH">
		        <div class="row">
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                    <input type="text" name="nome" id="nome" value="{{$documento->name}}" class="form-control input-sm">
		                </div>
		            </div>		             
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