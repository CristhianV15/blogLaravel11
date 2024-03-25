@extends('layouts.app')
@section('title' , 'Laravel 11')  <!--Se puede enviar como parametro para no cerrar el section-->

@push('css')
    <style>
        body{
            background-color: #aaaaaa;
        }
    </style>
@endpush
@push('css')
    <style>
        body{
            color:red;
        }
    </style>    
@endpush
@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página principal</h1>
    <!--para llamar a un componente -->
    <x-alert2 type="info" class="mb-4">
      <x-slot name="title">  <!--Para llamar solo a una parte del componente-->
      Información de la alerta
      </x-slot>
      Contenido de la alerta
    </x-alert2>  
        <div>Contenedor para probar espaciado de mv-4</div>
    </div>
    <!--<x-app-layout></x-app-layout>   usar plantilla desde un componente  (app-layout-blade)-->
@endsection