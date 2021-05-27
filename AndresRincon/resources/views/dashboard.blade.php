@extends('layout.main', [$titulo = 'Andres Rincon'])
@section('content')
    <div class="container margen">
        <div class="row">
            <div class="col text-center">
                <a href="{{url('/proyectos')}}" class="btn btn-danger px-5 py-3">Proyectos</a>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col">
                <h3 class="text-center text-primary">
                    Contactos
                </h3>
            </div>
        </div>
        @include('dashboard.contactos')
    </div>
@endsection