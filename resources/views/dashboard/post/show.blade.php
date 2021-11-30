@extends('dashboard.master')
@section('content')
    <div class="text-md-center"><strong>{{ __('Publicación') }}</strong></div>
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
        <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
@endsection
