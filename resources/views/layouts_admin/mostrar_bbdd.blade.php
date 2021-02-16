<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personas Listado:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div>

                    <table class="table table-sm">
                            <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Localidad</th>
                                        <th scope="col">comentario</th>
                                    </tr>

                            </thead>

                        @foreach($mostrar_datos as $p)
                            <tbody>
                                    <tr>
                                        <td scope="col">{{ $p->id }}</td>
                                        <td scope="col">{{ $p->nombre }}</td>
                                        <td scope="col">{{ $p->apellido }}</td>
                                        <td scope="col">{{ $p->localidad }}</td>
                                        <td scope="col">{{ $p->comentario }}</td>
                                    </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div><br>

        </div>
    </div>
</div>
