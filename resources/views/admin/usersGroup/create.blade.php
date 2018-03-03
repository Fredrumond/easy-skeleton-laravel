@extends('adminlte::page')

@section('title', 'Novo Grupo de Usuário')

@section('content_header')
    <h1>Inserir grupo de usuário</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('usuarios-grupo.index')}}">Grupo de Usuário</a></li>
      <li><a href="#">Inserir grupo de Usuário</a></li>
    </ol>
@stop

@section('content')
	            
  	@include('admin.includes.alerts')
	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Adicionar grupo usuário</h3>
		</div>	
	
		<div class="panel-body">
		    <div class="table-container">
		        <form method="POST" action="{{ route('usuarios-grupo.store')}}"  role="form" enctype="multipart/form-data">
		        {{ csrf_field() }}
		        <div class="row">
		            <div class="col-xs-6 col-sm-6 col-md-6">
		                <div class="form-group">
		                	<label>Nome</label>
		                    <input type="text" name="name" id="name" class="form-control input-sm" value="{{ old('name') }}">
		                </div>		                
		            </div>
		        </div>

		         <div class="row">        
		            <div class="col-xs-12 col-sm-12 col-md-12">
		                <input type="submit"  value="Salvar" class="btn btn-success ">
		                <a href="{{ route('usuarios-grupo.index') }}" class="btn btn-info" >Cancelar</a>
		            </div>
		         </div>
		        </form>
		    </div>
		</div>
	</div>
    
@stop