@extends('dashboard.master')
@section('content')
    <div class="text-md-center">
        <h3>Publicación</h3>
        <br>
    </div>

    <div class="form-group">
        <label for="name" class="col-form-label text-md-right"><strong>{{ __('Nombre') }}</strong></label>
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Publicación"
            value="{{ $post->publication }}">
    </div>

    <div class="form-group">
        <label for="name" class="col-form-label text-md-right"><strong>{{ __('Descripción') }}</strong></label>
        <textarea readonly class="form-control" name="publication_content" id="publication_content" cols="30" rows="10">
                        {{ $post->publication_content }}
                    </textarea>
    </div>

    <div>
        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <a href="{{ URL::previous() }}" class="btn btn-danger">Atrás</a>
            <input type="submit" value="Eliminar" class="btn btn-success">
            <a href="{{ route('home') }}" class="btn btn-info">Inicio</a>
        </form>
    </div>

@endsection
