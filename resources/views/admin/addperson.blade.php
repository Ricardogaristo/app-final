@extends('layouts_admin.appadmin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('notas.crear') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="localidad" placeholder="Localidad">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="comentario" placeholder="Comentario"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
