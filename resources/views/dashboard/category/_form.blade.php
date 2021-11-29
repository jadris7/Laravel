@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group">
    <input class="form-control" type="text" name="category" id="category"
    placeholder="Nombre de la Categoría" value="{{old('category', $category->category)}}">
</div>
<div class="form-group">
    <textarea class="form-control" name="description_category" id="description_category"
    cols="30" rows="10" placeholder="Descripción de la Categoría">
    {{ old('description_category', $category->description_category) }}
</textarea>
</div>

<div>
    <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Cancelar</a>
    <button type="submit" class="btn btn-info btn-sm">Guardar</button>
</div>



