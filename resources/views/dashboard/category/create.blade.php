@extends('dashboard.master')
@section('content')
    <h6>Categoría</h6>
    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category._form')
    </form>
@endsection
