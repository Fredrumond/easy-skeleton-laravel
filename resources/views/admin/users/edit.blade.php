@extends('adminlte::page')

@section('title', 'Editar usuário')

@section('content_header')
    <h1>Editar usuário</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('usuarios.index')}}">Usuários</a></li>
      <li><a href="#">Editar Usuário</a></li>
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
		        <form method="POST" action="{{ route('usuarios.update', $user->id) }}"  role="form" enctype="multipart/form-data">
		        {{ csrf_field() }}
		        <input name="_method" type="hidden" value="PATCH">
		        <div class="row">
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>Nome</label>
		                    <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control input-sm">
		                </div>
		            </div>
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>Usuário</label>
		                    <input type="text" name="username" id="username" class="form-control input-sm" value="{{$user->username}}">
		                </div>		                
		            </div>
		             <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>E-mail</label>
		                    <input type="email" name="email" id="email" class="form-control input-sm" value="{{$user->email}}">
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