<div class="contacto tecnologias-light my-3 py-5" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="datosContacto p-5 text-center">
                    <h1>Datos de contacto</h1>
                    <hr>
                    <br>
                    <div class="datos py-5">
                        <h4><strong>Teléfono: </strong>313 773 2634 - 312 410 0560</h4>
                        <h4><strong>Correo: </strong>Technomundohmr@gmail.com</h4>
                        <h4><strong>Correo: </strong>andresf.rincong@gmail.com</h4>
                    </div>
                    <hr>
                    <br>
                    <a href="https://wa.me/573124100560" class="btn-success btn btn-block"><i class="fab fa-whatsapp display-4"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="formContacto text-center">
                    {!! $errors->first('mensaje','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        :message
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>')
                    !!}
                    <h3>Contacto</h3>
                    
                    <form action="{{url('/contacto')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="idioma" value="es">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Telefono de contacto" name="telefono" id="telefono">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Correo" name="correo" id="correo" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Empresa" name="empresa" id="empresa">
                        </div>
                        <div class="mb-3">
                            <select name="servicio" id="servicio" class="form-select">
                                <option value="Contratación">Contratación</option>
                                <option value="Contratar para un proyecto">Contratar para un proyecto</option>
                                <option value="Crear sitio web">Crear sitio web</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control">Hola Andres, Deseo trabajar contigo...</textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger" type="button">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>