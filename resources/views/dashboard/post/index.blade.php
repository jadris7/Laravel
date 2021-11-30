@extends('dashboard.master')
{{-- b.section --}}
@section('content')
    <h6>Listar Publicaciones</h6>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Publicación"
            value="{{ $post->publication }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="publication_content" id="publication_content" cols="30" rows="10">
            {{ $post->publication_content }}
        </textarea>
    </div>

    <div>
        <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
@endsection


