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
            </div>
        </div>
    </div>
</div>
@endsection
