<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{-- Icono del sistema --}}
    <link rel="icon" href="{{asset('img/icono.jpg')}}">
    {{-- Iconos Bootstrap 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Barter App</title>

    <style>
        body {
            background: url('https://cdn.pixabay.com/photo/2013/08/28/11/47/leaf-176722_1280.jpg');
            z-index: -3;
            background-attachment: fixed;
            /* Si la imagen de fondo no abarca todo el fondo */
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
        }
        /* Llamar una fuente extern */
        /* @font-face {
            font-family: monospace;
            src: url('');
        } */
        .titulo1 {
            color: #fff;
            font-size: 40px;
        }
        .btn-fb {
            background-color: #0a58ca;
            color: #fff;
            border-radius: 50%;
        }
        .btn-fb:hover {
            background-color: #fff;
            color: #0a58ca;
        }
        .btn-wpp {
            background-color: #1cb478;
            color: #fff;
            border-color: #1cb478;
            border-radius: 50%;
        }
        .btn-wpp:hover {
            background-color: #fff;
            border-color: #1cb478;
            color: #1cb478;
        }
    </style>
    

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex ml-10">
                    <button class="btn btn-outline-success">Inciar sesión</button>
                </div>

            </div>
        </div>
    </nav>

    <div class="container">
        <center>
            <h1 class="titulo1 animate__animated animate__lightSpeedInLeft">Bienvenido a Barter App</h1>
            <button class="btn btn-primary btn-lg btn-fb animate__animated animate__zoomInLeft animate__delay-0.5s"><i class="bi bi-facebook"></i></button>
            <button class="btn btn-primary btn-lg btn-wpp animate__animated animate__zoomInRight animate__delay-0.5s"><i class="bi bi-whatsapp"></i></button>

        </center>
    </div>



      

      {{-- Bootstrap 5 --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>