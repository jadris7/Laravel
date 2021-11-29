@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category" id="category" placeholder="Nombre de la categoría"
            value="{{ $category->category }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="description_category" id="description_category" cols="30" rows="10">
            {{ $category->description_category }}
        </textarea>
    </div>

    <div>
        <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
@endsection
