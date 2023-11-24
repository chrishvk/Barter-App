@extends('layouts.principal')

@section('content')

<br><br><br><br>
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>{{$prenda->nombre}}</b></p></h3>
    <hr>
    <div class="container text-center my-3">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                <p><b>Calificación: {{$prenda->puntaje}} <i class="bi bi-star-fill"></i></b></p>
                <p><b>Estado: </b>Disponible</p>
            </div>
            <div class="col-md-4">
                <br>
                <p><b>Categoría: </b>{{$prenda->categoria}}</p>
                <p><b>Descripción: </b>{{$prenda->descripcion}}</p>
                <p><b>Talla: </b>{{$prenda->talla}}</p>
                <p><b>Color: </b>{{$prenda->color}}</p>
                <a class="btn btn-primary" href="{{url('/chatify')}}"><i class="bi bi-messenger"></i> Solicitar intercambio</a>
                <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
                <br><br>
                <form action="{{url('/favorito')}}" method="POST">
                    @csrf
                    <input type="text" name="id_prenda" value="{{$prenda->id}}" hidden>
                    <input type="text" name="email" value="{{Auth::user()->email}}" hidden>
                    <button type="submit" class="btn btn-warning"><i class="bi bi-heart-fill"></i> Agregar a favoritos</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection