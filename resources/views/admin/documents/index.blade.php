@extends('adminlte::page')

@section('title', 'Documentos')

@section('content_header')
    <h1>Documentos</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
      <li><a href="{{ route('documentos.index') }}">Documentos</a></li>
    </ol>
@stop

@section('content')
     <!-- Main content -->
    <section class="content">
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de documentos</h3>
              <a href="{{ route('documentos.create') }}" class="btn btn-success pull-right">Adicionar novo documento</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Arquivo</th>
                  <th>Ações</th>                   
                </tr>
                </thead>
                <tbody>
                @foreach ($documentos as $d)
                  <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>                 
                    <td>{{$d->path}}</td>
                    <td>
                      <a class="btn btn-info" href="{{ route('documentos.show',$d->id) }}">Ver</a>
                      <a class="btn btn-primary" href="{{ route('documentos.edit',$d->id) }}">Editar</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['documentos.destroy', $d->id],'style'=>'display:inline']) !!}
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
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
@stop