<div class="container margen">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 class="text-center">Nuevo Proyecto</h3>
            <div class="p-3">
                <form action="{{ url('/proyectos') }}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="proyecto">Proyecto</label>
                        <input type="text" name="proyecto" id="proyecto" class="form-control" placeholder="nombre del proyecto" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required>

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="enlace">enlace</label>
                        <input type="text" name="enlace" id="enlace" class="form-control" placeholder="enlace" required>
                    </div>
                    <div class="mb-3">
                        <label for="git">Enlace de git</label>
                        <input type="text" name="git" id="git" class="form-control" placeholder="enlace">
                    </div>
                    <div class="mb-3">
                        <select name="idioma" id="idioma" class="form-select">
                            <option value="es">es</option>
                            <option value="en">en</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger" type="submit">Crear</button>
                      </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
