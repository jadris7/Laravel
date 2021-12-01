@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <div class="text-center">
        <h3>Editar Categoría</h3>
        <br>
    </div>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.category._form')
    </form>
@endsection
