@csrf
<label>Titulo</label><br>
<input type="text" name="title" id="" value="{{ old("title", $categoria->title) }}">

<br>
<label>Slug</label><br>
<input type="text" name="slug" id="" value="{{ old("slug", $categoria->slug) }}">

<br>
<br>
<button type="submit">
    Guardar
</button>