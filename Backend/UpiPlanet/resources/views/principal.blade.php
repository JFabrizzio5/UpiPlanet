@extends('layout')

@section('title', 'Página de Inicio') <!-- Define el título de esta página -->

@section('content')
    <h1>Bienvenido a la página de inicio</h1>
    <p>Contenido principal de la página de inicio.</p>


    <livewire:counter /> <!-- Agrega el componente de Livewire a la página -->
@endsection
