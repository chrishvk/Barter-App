@extends('layouts.principal')

@section('content')
{{-- Login --}}
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">   
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <h1 style="font-size: 45px;"><center>Bienvenido a Barter App</center></h1>
          <div class="card shadow-2-strong" style="border-radius: 5%;">
            <form class="card-body p-5 text-center" action="{{route('login')}}" method="POST" style="background-color: #DEf7D9;">
              @csrf
              <h3 class="mb-5">Iniciar sesión</h3>
              <div class="form-outline mb-4">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                <label class="form-label" for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
  
              <div class="form-outline mb-4">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                <label class="form-label" for="password">Contraseña</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="mb-5">
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                    <br>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                    @endif
                </div>
            </div>
            <hr class="my-4">
            <button class="btn btn-lg btn-primary" style="background-color: #dd4b39;" type="submit"><i class="bi bi-google"></i> Iniciar sesión con Google</button>
            <br><br>
            <p>Eres nuevo? <a href="/register">Registrate</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
