@extends('layouts.principal')

@section('content')

<br><br><br>
<div class="container" style="background-color: #CBFFAA; border-radius: 10px">
    <h3><p style="text-align: center"><b>Resultados:</b></p></h3>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $contador = 0;?>
                    @foreach ($datos as $dato)
                        
                            <?php $contador = $contador + 1;
                            if($contador == '1') { ?>
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$dato->id)}}">
                                                    <img src="{{asset('storage').'/'.$dato->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>
                                            {{$dato->nombre}}
                                        </div>
                                    </div>
                                </div>     
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="">
                                            <div class="card-img">
                                                <a href="{{url('/prenda'.'/'.$dato->id)}}">
                                                    <img src="{{asset('storage').'/'.$dato->imagen}}" alt="" width="250px" height="250px">
                                                </a>
                                            </div>  
                                            {{$dato->nombre}}
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        
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


@endsection


