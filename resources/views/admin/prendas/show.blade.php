@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Prenda: {{$prenda->nombre}}</h1>
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
            <div class="col-md-6">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Datos: </h5>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <td><b>Nombre</b></td>
                                <td>{{$prenda->nombre}}</td>
                            </tr>
                            <tr>
                                <td><b>Categoria</b></td>
                                <td>{{$prenda->categoria}}</td>
                            </tr>
                            <tr>
                                <td><b>Talla</b></td>
                                <td>{{$prenda->talla}}</td>
                            </tr>
                            <tr>
                                <td><b>Color</b></td>
                                <td>{{$prenda->color}}</td>
                            </tr>
                            <tr>
                                <td><b>Descripción</b></td>
                                <td>{{$prenda->descripcion}}</td>
                            </tr>
                            <tr>
                                <td><b>Foto</b></td>
                                <td>
                                    <img src="{{asset('storage').'/'.$prenda->imagen}}" alt="" width="300px">
                                </td>
                            </tr>
                        </table>
                        <a href="{{url('admin/prendas')}}" class="btn btn-danger">Atrás</a>
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
