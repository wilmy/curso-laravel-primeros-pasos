@csrf
<label>Titulo</label>
<input type="text" name="title" id="" class="form-control"  value="{{ old("title", $category->title) }}">

<label>Slug</label>
<input type="text" name="slug" id="" class="form-control"  value="{{ old("slug", $category->slug) }}">

<br>
<button class="btn btn-success" type="submit">
    Guardar
</button>