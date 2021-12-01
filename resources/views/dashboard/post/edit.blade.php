@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <div class="text-center">
        <h3>Editar Publicación</h3>
        <br>
    </div>
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection
