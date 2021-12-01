@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <div class="text-center">
        <h3>Crear Publicación</h3>
        <br>
    </div>
    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection
