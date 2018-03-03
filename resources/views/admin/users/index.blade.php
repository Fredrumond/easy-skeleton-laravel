@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuários</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
      <li><a href="{{ route('usuarios.index') }}">Usuários</a></li>
    </ol>
@stop

@section('content')
     <!-- Main content -->
    <section class="content">
      @include('admin.includes.alerts')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de usuários</h3>
              <a href="{{ route('usuarios.create') }}" class="btn btn-success pull-right">Adicionar novo usuário</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Grupo</th>
                  <th>Data Cadastro</th>
                  <th>Ações</th>                   
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $u)                
                  <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->group->name}}</td>
                    <td>{{$u->created_at}}</td>
                    <td>
                      <a class="btn btn-info" href="{{ route('usuarios.show',$u->id) }}">Ver</a>
                      <a class="btn btn-primary" href="{{ route('usuarios.edit',$u->id) }}">Editar</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $u->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!}                     
                    </td> 
                  </tr>
                @endforeach
                </tbody>                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop

@section('js')
    <script>
      $(function () {    
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
@stop