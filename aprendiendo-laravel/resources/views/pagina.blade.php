@extends('layouts.master')

@section('titulo')
Curso de PHP
@stop

@section('header')
@parent()
    <h2>Sobreescribiendo el header</h2>
    
    <h2>Agregando texto al de la plantilla</h2>
@stop

@section('content')
<h1>Contenido de la pagina generica</h1>
@stop