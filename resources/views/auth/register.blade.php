@extends('layouts.principal')

@section('content')
{{-- Registro --}}
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">   
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <h1 style="font-size: 45px;"><center>Regístrate</center></h1>
          <div class="card shadow-2-strong" style="border-radius: 5%;">
            <form class="card-body p-5 text-center" action="{{route('register')}}" method="POST" style="background-color: #DEE7D9;">
                @csrf
                <div class="form-outline mb-4">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    <label class="form-label" for="name">Nombre completo</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label class="form-label" for="email">Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label class="form-label" for="password">Contraseña</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <label class="form-label" for="password-confirm">Confirmar contraseña</label>
                </div>      
                <hr class="my-3">
  
                <button class="btn btn-lg btn-inline btn-primary" style="background-color: #3a8a52;"
                type="submit">Registrarse</button>
                
                <a class="btn btn-danger btn-lg" href="/barter/public" style="color: #fff">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
