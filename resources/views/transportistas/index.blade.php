@extends("layouts.master")

@section("titulo")
    Transportistas
@endsection

@section("contenido")
    <div class="row">
        @foreach( $transportistas as  $transportista )
            <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                <div class="card text-white bg-info" style="width: 21rem;">
                    <img class="card-img-top"
                         src="{{asset('assets/imagenes/transportistas')}}/{{$transportista->imagen}}"
                         style="height:200px"/>
                    <div class="card-body">
                        <a href="{{ route('transportistas.show' , $transportista->id) }}">
                            <h4 class="card-title text-center">{{$transportista->nombre}}</h4>
                        </a>
                    </div>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item">Paquetes pendientes de entrega: {{--{{$transportista->paquetes}}--}}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection


