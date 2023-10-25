<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- SLICK --}}
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{-- Icono del sistema --}}
    <link rel="icon" href="{{asset('img/icono.jpg')}}">
    {{-- Iconos Bootstrap 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    {{-- Hoja de estilos --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Barter App</title>   

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div style="width: 45px">
                <img src="{{asset('img/icono.jpg')}}" alt="logoba" width="35px">
            </div>
            <a class="navbar-brand" href="#">BarterApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i> Inicio</a>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-bell-fill"></i>
                        Notificaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bi bi-cloud-upload-fill"></i>
                        Subir fotos</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-archive"></i>
                        Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pantalones</a></li>
                            <li><a class="dropdown-item" href="#">Camisas</a></li>
                            <li><a class="dropdown-item" href="#">Casaca</a></li>
                            <li><a class="dropdown-item" href="#">Zapatos</a></li>
                            <li><a class="dropdown-item" href="#">Camiseta</a></li>
                            <li><a class="dropdown-item" href="#">Carteras</a></li>
                            <li><a class="dropdown-item" href="#">Short</a></li>
                            <li><a class="dropdown-item" href="#">Gorros</a></li>
                            <li><a class="dropdown-item" href="#">Blusas</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <center>
            <h1 class="titulo1 animate__animated animate__lightSpeedInLeft">Bienvenido a Barter App</h1>
            <button class="btn btn-primary btn-lg btn-fb animate__animated animate__zoomInLeft animate__delay-0.5s"><i class="bi bi-facebook"></i></button>
            <button class="btn btn-primary btn-lg btn-wpp animate__animated animate__zoomInRight animate__delay-0.5s"><i class="bi bi-whatsapp"></i></button>
            <br><br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class="d-flex">
                        <label for=""><b style="color: #fff; font-size:25px">Buscar: </b></label>
                        <input class="form-control me-2" type="search" placeholder="Nombre de la prenda" aria-label="Search">
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

    <div class="container" style="background-color: #CBFFAA; border-radius: 10px">
        <h3><p style="text-align: center"><b>Recién agregados</b></p></h3>
        <div class="row">
            <section class="regular slider" style="margin-top: 0px">
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>            
            </section>
        </div>
    </div>

    <br><br>

    <div class="container" style="background-color: #CBFFAA; border-radius: 10px">
        <h3><p style="text-align: center"><b>Los más buscados</b></p></h3>
        <div class="row">
            <section class="regular slider" style="margin-top: 0px">
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>
                <div>
                    <img src='https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe77c5b62/images/hi-res/196150118259_1_20221215120000-mrtPeru.jpg' height="200px" width="10px">
                </div>            
            </section>
        </div>
    </div>



      

    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- SLICK script --}}
    <script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5
        });
    </script>
</body>
</html>