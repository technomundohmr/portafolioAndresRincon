@extends('layout.mainEn', [$titulo = 'Andres Rincon'])
@section('content')
    @include('homeEn.headerImg')
    <section>
        @include('homeEn.profile')
    </section>
    <section>
        @include('homeEn.tecnologies')
    </section>
    <section>
        @include('homeEn.proyects')
    </section>
    <section>
        @include('homeEn.contact')
    </section>
@endsection