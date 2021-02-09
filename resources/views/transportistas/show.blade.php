@extends('layouts.master')

@section('titulo')
    Transportista
@endsection

@section("contenido")
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-1">
                    <div class="mt-5 divImagen">
                        <div class="card-body">
                            <img class="card-img-top img-fluid"
                                 src="{{asset('assets/imagenes/transportistas')}}/{{$transportista->imagen}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 mt-5 text-dark">
                            <div class="card-body border border-success">
                                <h4 class="card-title text-center text-success">{{$transportista->nombre}}{{$transportista->apellidos}}</h4>
                                <ul class="list-group list-group-flush text-dark">
                                    <li class="list-group-item">Años de permiso de circualcion: {{$transportista->fechaPermisoConducir}}</li>
                                </ul>
                                <ul class="list-group list-group-flush text-dark">
                                    <li class="list-group-item">Empresas: </li>
                                </ul>
                                <ul class="list-group list-group-flush text-dark">
                                    <li class="list-group-item">Paquetes:  </li>
                                </ul>
                                <a href="" class="btn btn-dark">Entregar todo</a>
                                <a href="" class="btn btn-primary">Marcar todo como no entregado</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
