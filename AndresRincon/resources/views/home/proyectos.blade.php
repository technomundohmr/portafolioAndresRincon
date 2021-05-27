<div class="proyectos my-5" id="proyectos">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center my-3">Proyectos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th>Proyecto</th>
                                <th>Descripción</th>
                                <th>Enlaces</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td>{{$proyecto->proyecto}}</td>
                                    <td>{{$proyecto->descripcion}}</td>
                                    <td>
                                        <a href="{{$proyecto->enlace}}" target="_blank" class="btn btn-success"><i class="fas fa-code"></i> Visitar</a>
                                        @if ($proyecto->git != '')
                                            <a href="{{$proyecto->git}}" target="_blank" class="btn btn-primary"><i class="fab fa-github"></i> Github</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
