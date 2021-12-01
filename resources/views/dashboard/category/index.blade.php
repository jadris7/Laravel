@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <div class="container">
        <div>
            <div class="text-center">
                <h3>Listar Categorías</h3>
                <br>
            </div>
            @if ($category->isEmpty())
                <div>No hay Categorías...</div>
            @else
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $category)
                            <tr>
                                <td>{!! $category->id !!}</td>
                                <td>{!! $category->category !!}</td>
                                <td class="text-justify">{!! $category->description_category !!}</td>
                                <td class="col text-center btn btn-default btn-lg ">
                                    <!-- Button trigger modal -->
                                    <button  class="far fa-trash-alt" data-toggle="modal"
                                        data-target="#modal-delete-{{ $category->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('dashboard.category.delete')
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
