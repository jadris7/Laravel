@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <h6>Crear Publicación</h6>
    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection
