@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Nuevo registro de fotos</h1>
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
                  <h5 class="m-0">Complete los campos solicitados</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/prendas') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 ">
                                <div class="form-group">
                                    <label for="">Nombre de la prenda <span style="color: red"><b>*</b></span></label>
                                    <input type="text" class="form-control" name="nombre" required value="{{old('nombre')}}">
                                    @error('nombre')
                                        <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Categoría de la prenda<span style="color: red"><b>*</b></span></label>
                                    {{-- <input type="text" class="form-control" name="categoria" required value="{{old('categoria')}}"> --}}
                                    <select name="categoria" id="" class="form-control">
                                      <option value="PANTALONES" {{old('categoria')=='PANTALONES' ? 'selected' : ''}}>PANTALONES</option>
                                      <option value="CAMISAS" {{old('categoria')=='CAMISAS' ? 'selected' : ''}}>CAMISAS</option>
                                      <option value="CASACAS" {{old('categoria')=='CASACAS' ? 'selected' : ''}}>CASACAS</option>
                                      <option value="ZAPATOS" {{old('categoria')=='ZAPATOS' ? 'selected' : ''}}>ZAPATOS</option>
                                      <option value="CAMISETAS" {{old('categoria')=='CAMISETAS' ? 'selected' : ''}}>CAMISETAS</option>
                                      <option value="CARTERAS" {{old('categoria')=='CARTERAS' ? 'selected' : ''}}>CARTERAS</option>
                                      <option value="SHORTS" {{old('categoria')=='SHORTS' ? 'selected' : ''}}>SHORTS</option>
                                      <option value="FALDAS" {{old('categoria')=='FALDAS' ? 'selected' : ''}}>FALDAS</option>
                                      <option value="GORROS" {{old('categoria')=='GORROS' ? 'selected' : ''}}>GORROS</option>
                                      <option value="BLUSAS" {{old('categoria')=='BLUSAS' ? 'selected' : ''}}>BLUSAS</option>
                                    </select>
                                    @error('categoria')
                                        <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Talla de la prenda<span style="color: red"><b>*</b></span></label>
                                    <input type="text" class="form-control" name="talla" required value="{{old('talla')}}">
                                    @error('talla')
                                        <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Color de la prenda<span style="color: red"><b>*</b></span></label>
                                    <input type="text" class="form-control" name="color" required value="{{old('color')}}"> 
                                    @error('color')
                                        <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="">Descripción de la prenda<span style="color: red"><b>*</b></span></label>
                                    <textarea name="descripcion" id="" cols="30" rows="8" class="form-control" required value="{{old('descripcion')}}"></textarea>
                                    @error('descripcion')
                                    <small style="color:red">{{$message}}</small>
                                @enderror
                                </div>
                                <div class="form-group" hidden>
                                  <label for="">Puntaje de la prenda<span style="color: red"><b>*</b></span></label>
                                  <input id="puntajeInput" type="text" class="form-control" name="puntaje" required>
                                  <script>
                                    // Función para llamar a modelo de reconocimiento y categorizacion de prendas
                                    function generarPuntaje(min, max) {
                                        return Math.floor(Math.random() * (max - min + 1)) + min;
                                    }
                                    var puntajePrenda = generarPuntaje(8, 20);
                                    document.getElementById("puntajeInput").value = puntajePrenda;
                                  </script>
                                </div>
                                <div class="form-group">
                                    <label for="">Suba una foto de la prenda<span style="color: red"><b>*</b></span></label>
                                    <input type="file" class="form-control" name="imagen" id="file" required value="{{old('imagen')}}">
                                    @error('imagen')
                                        <small style="color:red">{{$message}}</small>
                                    @enderror
                                    <br>
                                    <output id="list" style="margin-top: 0px"></output>
                                    <script>
                                      function archivo(evt) {
                                          var files = evt.target.files;
                                          for (var i = 0, f; f = files[i]; i++) {
                                              //Solo admitimos imágenes.
                                              if (!f.type.match('image.*')) {
                                                  continue;
                                              }
                                              var reader = new FileReader();
                                              reader.onload = (function (theFile) {
                                                  return function (e) {
                                                      // Insertamos la imagen
                                                      document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="400px" title="', escape(theFile.name), '"/>'].join('');
                                                  };
                                              })(f);
                                              reader.readAsDataURL(f);
                                          }
                                      }
                                      document.getElementById('file').addEventListener('change', archivo, false);
                                      
                                  </script>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-6">
                            <input type="submit" value="Registrar" class="btn btn-success">
                            <a href="" class="btn btn-default">Cancelar</a>
                          </div>
                        </div>
                    </form>
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
