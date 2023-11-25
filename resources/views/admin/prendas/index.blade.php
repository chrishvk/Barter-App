@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Lista de fotos de prendas </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Prendas subidas</h5>
                  @if ($message = Session::get('mensaje'))
                    @foreach($prendas as $prenda)
                      <script>
                        Swal.fire(
                        'Éxito',
                        'Puntaje obtenido: {{ $prenda->puntaje }}',
                        'success')
                      </script>
                    @endforeach
                  @endif
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                      <table class="table table-bordered table-hover table-striped">
                        <thead>
                          <tr>
                            <th>Nro</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Talla</th>
                            <th>Color</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Puntaje</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 0;?>
                            @foreach($prendas as $prenda)
                              <tr>
                                <td> <?php echo $contador = $contador + 1;?></td>
                                <td>{{ $prenda->nombre }}</td>
                                <td>{{ $prenda->categoria }}</td>
                                <td>{{ $prenda->talla }}</td>
                                <td>{{ $prenda->color }}</td>
                                <td>{{ $prenda->descripcion }}</td>
                                <td>
                                  <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="100px">
                                </td>
                                <td>{{ $prenda->puntaje }} <i class="fa fa-star"></i></td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('prendas.show', $prenda->id)}}" class="btn btn-info btn-sm">Ver</a>
                                    <a href="{{route('prendas.edit', $prenda->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                    @if ($message = Session::get('mensaje2'))
                                        <script>
                                          Swal.fire(
                                          'Éxito',
                                          '{{$message}}',
                                          'success')
                                        </script>
                                      @endif
                                    <form action="{{url('admin/prendas',$prenda->id)}}" method="POST">
                                      @csrf
                                      {{method_field('DELETE')}}
                                      <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" onclick="return confirm('¿Está seguro que desea eliminar la publicación?')">
                                      @if ($message = Session::get('mensaje3'))
                                        <script>
                                          Swal.fire(
                                          'Éxito',
                                          '{{$message}}',
                                          'success')
                                        </script>
                                      @endif
                                    </form>

                                  </div>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection
