@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Inserir usuário</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('usuarios.index')}}">Documentos</a></li>
      <li><a href="#">Inserir Usuário</a></li>
    </ol>
@stop

@section('content')
	            
  	@include('admin.includes.alerts')
	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Adicionar usuário</h3>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		        <form method="POST" action="{{ route('usuarios.store')}}"  role="form" enctype="multipart/form-data">
		        {{ csrf_field() }}
		        <div class="row">
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                    <input type="text" name="nome" id="nome" class="form-control input-sm" placeholder="Nome" value="{{ old('nome') }}">
		                </div>
		            </div>
		             <div class="col-xs-6 col-sm-6 col-md-6">
		             	<div class="form-group">	                      
	                        {!! Form::select('group_id', $groupOptions, null, ['class'=>'form-control input-sm']) !!}  
                    	</div>
                    </div>
		        </div>

		         <div class="row">        
		            <div class="col-xs-12 col-sm-12 col-md-12">
		                <input type="submit"  value="Salvar" class="btn btn-success ">
		                <a href="{{ route('usuarios.index') }}" class="btn btn-info" >Cancelar</a>
		            </div>
		         </div>
		        </form>
		    </div>
		</div>
	</div>
    
@stop