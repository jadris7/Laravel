@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Módulos del sistema') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @auth
                        Bienvenid@ al sistema {{ auth()->user()->name }}
                    @endauth
                </div>
                <a href="{{ route('post.index') }}" class="btn btn-primary">Listar Publicaciones</a>
                <a href="{{ route('category.index') }}" class="btn btn-light">Listar Categorías</a>
            </div>
        </div>
    </div>
</div>
@endsection
