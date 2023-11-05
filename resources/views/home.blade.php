@extends('layouts.principal')

@section('content')
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{ Auth::user()->name }}
                </a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
