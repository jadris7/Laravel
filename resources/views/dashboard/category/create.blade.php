@extends('dashboard.master')
@section('content')
<div class="text-center">
    <h3>Crear Categoría</h3>
    <br>
</div>
    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category._form')
    </form>
@endsection
