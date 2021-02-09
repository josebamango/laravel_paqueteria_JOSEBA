@extends('layouts.master')
@section('titulo')
    Crear paquete
@endsection

@section("contenido")
    <div class="page-wrapper fondoCard p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="text-primary text-center">Nuevo paquete</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('paquetes.store')}}" method="post" role="form">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="direccion">direccion de entrega:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control text-success" required
                                   placeholder="Su dirección">
                        </div>
                        <div class="form-group">
                            <label for="transportista">transportista: </label>
                            <select name="transportista" id="transportista" class="form-control border border-success text-center">

                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="imagen">Imagen:</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>
                        <button class="btn btn-dark offset-5" type="submit" name="crear">Añadir paquete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

