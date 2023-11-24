@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{Auth::user()->name}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Información Pública</h5>
                  @if ($message = Session::get('mensaje'))
                      <script>
                        Swal.fire(
                        'Éxito',
                        '{{$message}}',
                        'success')
                      </script>
                  @endif
                </div>
                <div class="card-body">
                    <label for="">Nombre completo: </label>
                    <p>{{Auth::user()->name}}</p>

                    <label for="">Email: </label>
                    <p>{{Auth::user()->email}}</p>

                </div>
                <div class="card-header">
                    <h5 class="m-0">Información Personal</h5>
                    @if ($message = Session::get('mensaje'))
                        <script>
                          Swal.fire(
                          'Éxito',
                          '{{$message}}',
                          'success')
                        </script>
                    @endif
                </div>
                <div class="card-body">
                    <label for="">Contraseña: </label>
                    <p>{{Auth::user()->password}}</p>

                    <label for="">Número de celular: </label>
                    <p>{{Auth::user()->name}}</p>

                    <label for="">Foto de perfil: </label>
                    <p>{{Auth::user()->name}}</p>


                    <i class="nav-icon fa fa-check-circle" style="color: green"></i><a href="">Cuenta verificada</a>
                    <br><br>
                    <a href="" class="btn btn-success">Actualizar</a>
                    

                </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>


@endsection
