@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group row">
    <label for="publication" class="col-md-2 col-form-label text-md-right">
        {{ __('Nombre noticia') }}
    </label>

    <div class="col-md-10">
        <input type="text" class="form-control @error('publication') is-invalid @enderror" name="publication" id="publication" required autocomplete="publication"
        value="{{ old('publication', $post->publication) }}">
        @error('publication')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $category => $id)
            <option {{ $post ->category_id == $id ? 'selected="selected"':'' }} value="{{ $id }}">
                {{ $category }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="state" id="state">
        <option value="">received</option>
        <option value="">published</option>
        <option value="">unpublished</option>
        <option value="">in_review</option>
    </select>
</div>

<div class="form-group">
    <textarea name="publication_content" class="form-control" id="publication_content" cols="30" rows="10"
        placeholder="Contenido de la publicación">
    {{ old('publication_content', $post->publication_content) }}
</textarea>
</div>

<div>
    <a href="{{ URL::previous() }}" class="btn btn-danger">Atrás</a>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('home') }}" class="btn btn-info">Inicio</a>
</div>
