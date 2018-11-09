@extends('adminlte::page')

@section('title', 'Cidades')

@section('content_header')
    <h1>Grupos</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
      <li><a href="{{ route('cidades.index') }}">Cidades</a></li>
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
              <h3 class="box-title">Lista de Cidades</h3>              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Estado</th>
                  <th>Cod. IBGE</th>              
                </tr>
                </thead>
                <tbody>
                @foreach ($cities as $c)
                  <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->uf}}</td> 
                    <td>{{$c->cod_ibge}}</td>                     
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