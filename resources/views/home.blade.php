@extends('layouts_admin.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Escritorio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido Administrador') }}
                </div>
            </div><br>
        </div>
    </div>
</div>
    @include('layouts_admin/mostrar_bbdd');
@endsection
