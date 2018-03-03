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
		                	<label>Nome</label>
		                    <input type="text" name="name" id="name" class="form-control input-sm" value="{{ old('name') }}">
		                </div>		                
		            </div>
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>Usuário</label>
		                    <input type="text" name="username" id="username" class="form-control input-sm" value="{{ old('username') }}">
		                </div>		                
		            </div>
		             <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>E-mail</label>
		                    <input type="email" name="email" id="email" class="form-control input-sm" value="{{ old('email') }}">
		                </div>		                
		            </div>
		             <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>Senha</label>
		                    <input type="password" name="password" id="password" class="form-control input-sm" value="{{ old('password') }}">
		                </div>		                
		            </div>
		             <div class="col-xs-6 col-sm-6 col-md-6">
		             	<div class="form-group">
		             	<label>Grupo</label>	                      
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