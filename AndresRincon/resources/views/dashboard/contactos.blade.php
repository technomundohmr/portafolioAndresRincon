<div class="row">
@foreach ($contactos as $contacto)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><strong>Nombre: </strong>{{$contacto->nombre}}</h5>
                <h5 class="card-title"><strong>Teléfono: </strong>{{$contacto->telefono}}</h5>
                <h5 class="card-title"><strong>Correo: </strong>{{$contacto->correo}}</h5>
                <h5 class="card-title"><strong>Empresa: </strong>{{$contacto->empresa}}</h5>
                <h5 class="card-title"><strong>Solicitud: </strong>{{$contacto->servicio}}</h5>
                <p class="card-text">{{$contacto->mensaje}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>