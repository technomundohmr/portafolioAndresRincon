@extends('layout.main', [$titulo = 'Andres Rincon'])
@section('content')
    @include('home.headerImg')
    <section>
        @include('home.perfil')
    </section>
    <section>
        @include('home.tecnologias')
    </section>
    <section>
        @include('home.proyectos')
    </section>
    <section>
        @include('home.contacto')
    </section>
@endsection