@csrf
<label>Titulo</label><br>
<input type="text" name="title" id="" value="{{ old("title", $post->title) }}">

<br>
<label>Slug</label><br>
<input type="text" name="slug" id="" value="{{ old("slug", $post->slug) }}">

<br>
<br>
<label for="">Categorias</label><br>
<select name="category_id" id="">
    <option value="">Seleccione</option>
    @foreach ($categories as $item)
        <option {{ old("category_id", $post->category_id) == $item->id ? "selected" : "" }} value="{{ $item->id }}"> {{ $item->title }}</option>   
    @endforeach
</select>
<br>
<br>

<label for="">Posteado</label><br>
<select name="posted" id="">
    <option {{ old("posted", $post->posted) == 'not' ? "selected" : "" }} value="not">No</option>
    <option {{ old("posted", $post->posted) == 'yes' ? "selected" : "" }} value="yes">Si</option>
</select>
<br>
<br>
<label for="">Descripción</label><br>
<textarea name="description" id="" cols="30" rows="10"> {{ old("description", $post->description) }}</textarea>

<br>
<label for="">Contenido</label><br>
<textarea name="content" id="" cols="30" rows="10"> {{ old("content", $post->content) }}</textarea>

<br>
<label>Imagen</label><br>
<input type="file" name="image">

<br>
<br>
<button type="submit">
    Guardar
</button>