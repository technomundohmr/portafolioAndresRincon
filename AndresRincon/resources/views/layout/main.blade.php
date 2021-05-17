<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='css/estilos.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>{{$titulo}}</title>
</head>
<body>
    @include('layout.btnLight')
    @include('layout.btnIdioma')
    <script src="https://kit.fontawesome.com/4b3b6a7018.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu light-menu">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-5">
                <a class="nav-link active" href="{{url('/')}}"><i class="fas fa-home"></i> Home</a>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link active" href="{{url('/tecnologias')}}"><i class="fas fa-code"></i> Tecnologías</a>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link active" href="{{url('/proyectos')}}"><i class="fas fa-network-wired"></i> Proyectos</a>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link active" href="{{url('/contacto')}}"><i class="fas fa-envelope-open-text"></i> Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>