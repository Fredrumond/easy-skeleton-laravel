@extends('adminlte::page')

@section('title', 'Novo Documento')

@section('content_header')
    <h1>Inserir documento</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home')}}">Dashboard</a></li>
      <li><a href="{{ route('admin.documento')}}">Documentos</a></li>
      <li><a href="{{ route('documento.inserir')}}">Inserir Documento</a></li>
    </ol>
@stop

@section('content')
    <p>FORMULARIO</p>
@stop