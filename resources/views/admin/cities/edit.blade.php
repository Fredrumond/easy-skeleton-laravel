@extends('adminlte::page')

@section('title', 'Editar grupo de Usuário')

@section('content_header')
    <h1>Editar grupo de usuário</h1>

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
		        <form method="POST" action="{{ route('usuarios-grupo.update', $userGroup->id) }}"  role="form" enctype="multipart/form-data">
		        {{ csrf_field() }}
		        <input name="_method" type="hidden" value="PATCH">
		        <div class="row">
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>Nome</label>
		                    <input type="text" name="name" id="name" value="{{$userGroup->name}}" class="form-control input-sm">
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