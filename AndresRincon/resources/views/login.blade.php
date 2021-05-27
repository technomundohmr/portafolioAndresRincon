@extends('layout.main', [$titulo = 'Andres Rincon'])
@section('content')
<div class="margen">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="formulariologin p-5">
                    <h3 class="text-center">Bienvenido</h3>
                    {!!$errors -> first('auth','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        :message
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>')!!}
                    <form action="{{url('/login')}}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            {!!$errors -> first('email','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                :message
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>')!!}
                            <label for="email">Correo</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese su correo">
                        </div>
                        <div class="mb-3">
                            {!!$errors -> first('password','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                :message
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>')!!}
                            <label for="password">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger" type="submit">Ingresar</button>
                          </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
@endsection