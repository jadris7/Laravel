@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <h6>Editar Categoría</h6>
    <form action="{{ route('category.update',$category -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.category._form')
    </form>
@endsection
