@extends('layout.mainEn', [$titulo = 'Andres Rincon'])
@section('content')
    @include('dashboard.formProyects')
    <hr>
    @include('home.proyectos')
@endsection