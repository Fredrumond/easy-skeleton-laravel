@extends('adminlte::page')

@section('title', 'Visualizar grupo de Usuário')

@section('content_header')
    <h1>Visualizar grupo de usuário</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('usuarios-grupo.index')}}">Grupo de usuários</a></li>
      <li><a href="#">Visualizar grupo de usuário</a></li>
    </ol>
@stop

@section('content')
	
	<div class="box">
		<div class="box-header">			
			<h3 class="box-title">{{$userGroup->name}}</h3>
              <a href="{{ route('usuarios-grupo.index') }}" class="btn btn-primary pull-right">Voltar</a>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		    	<div class="col-xs-12 col-sm-12 col-md-12">
		            <div class="form-group">
		                <strong>Nome:</strong>
		                {{ $userGroup->name}}
		            </div>
		        </div>
		    </div>
		</div>
	</div>
    
@stop