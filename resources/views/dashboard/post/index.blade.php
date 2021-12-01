@extends('dashboard.master')

{{-- b.section --}}
@section('content')

    <div class="container">
        <div>
            <div class="text-center">
                <h3>Listar Publicaciones</h3>
            </div>
            @if ($post->isEmpty())
                <div>No hay Publicaciones...</div>
            @else
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $post)
                            <tr>
                                <td class="table-light">{!! $post->id !!}</td>
                                <td>{!! $post->publication !!}</td>
                                <td class="text-justify">{!! $post->publication_content !!}</td>
                                <td>{!! $post->state !!}</td>
                                <td class="col text-center btn btn-default btn-lg">
                                    <button class="far fa-trash-alt" data-toggle="modal"
                                        data-target="#modal-delete-{{ $post->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('dashboard.post.delete')
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
