@extends('adminlte::page')

@section('title', 'Visualizar Usuário')

@section('content_header')
    <h1>Visualizar usuário</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('usuarios.index')}}">Usuários</a></li>
      <li><a href="#">Visualizar usuário</a></li>
    </ol>
@stop

@section('content')
	
	<div class="box">
		<div class="box-header">			
			<h3 class="box-title">{{$user->name}}</h3>
              <a href="{{ route('usuarios.index') }}" class="btn btn-primary pull-right">Voltar</a>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		    	<div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>Nome:</strong>
		                {{ $user->name}}
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>Usuário:</strong>
		                {{ $user->username}}
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>E-mail:</strong>
		                {{ $user->email}}
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>Grupo:</strong>
		                {{ $user->group->name}}
		            </div>
		        </div>

		        
		    </div>
		</div>
	</div>
    
@stop