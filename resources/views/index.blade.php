@extends('layouts.principal')

@section('content')
    
<div class="container">
    <center>
        <h1 class="titulo1 animate__animated animate__lightSpeedInLeft">Bienvenido a Barter App</h1>
        <button class="btn btn-primary btn-lg btn-fb animate__animated animate__zoomInLeft animate__delay-0.5s"><i class="bi bi-facebook"></i></button>
        <button class="btn btn-primary btn-lg btn-wpp animate__animated animate__zoomInRight animate__delay-0.5s"><i class="bi bi-whatsapp"></i></button>
        <br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="d-flex" method="GET" action="{{url('/buscar')}}">
                    <label for=""><b style="color: #fff; font-size:25px">Buscar: </b></label>
                    <input class="form-control me-2" type="search" placeholder="Nombre de la prenda" aria-label="Search" name="texto">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </center>
</div>

<br><br>
{{-- Recien agregados --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>Recien agregados</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        <?php $contador = $contador + 1;
                        if($contador == '1') { ?>
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="">
                                        <div class="card-img">
                                            <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px" class="zoomP">
                                            </a>
                                        </div>
                                        {{$prenda->nombre}}
                                    </div>
                                </div>
                            </div>     
                        <?php } else { ?>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="">
                                        <div class="card-img">
                                            <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                <img class="zoomP" src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                            </a>
                                        </div>
                                        {{$prenda->nombre}}
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    @endforeach
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel1" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel1" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Pantalones --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>PANTALONES</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'PANTALONES')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel2" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel2" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Camisas --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>CAMISAS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'CAMISAS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel3" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel3" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Casacas --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>CASACAS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'CASACAS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel4" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel4" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Zapatos --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>ZAPATOS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel5" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'ZAPATOS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel5" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel5" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Camisetas --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>CAMISETAS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel6" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'CAMISETAS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel6" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel6" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Carteras --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>CARTERAS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel7" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'CARTERAS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel7" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel7" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Shorts --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>SHORTS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel8" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'SHORTS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel8" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel8" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Faldas --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>FALDAS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel9" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'FALDAS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel9" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel9" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Gorros --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>GORROS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel10" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'GORROS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel10" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel10" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>
{{-- Blusas --}}
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>BLUSAS</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel11" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($prendas as $prenda)
                        @if ($prenda->categoria == 'BLUSAS')
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$prenda->id)}}">
                                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$prenda->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        @endif    
                    @endforeach                      
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel11" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel11" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection