@csrf
<label>Titulo</label>
<input type="text" name="title" id="" class="form-control"  value="{{ old("title", $post->title) }}">


<label>Slug</label>
<input type="text" name="slug" id="" class="form-control"  value="{{ old("slug", $post->slug) }}">

<label for="">Categorias</label>
<select name="category_id" id="" class="form-control" >
    <option value="">Seleccione</option>
    @foreach ($categories as $item)
        <option {{ old("category_id", $post->category_id) == $item->id ? "selected" : "" }} value="{{ $item->id }}"> {{ $item->title }}</option>   
    @endforeach
</select>


<label for="">Posteado</label>
<select name="posted" id="" class="form-control" >
    <option {{ old("posted", $post->posted) == 'not' ? "selected" : "" }} value="not">No</option>
    <option {{ old("posted", $post->posted) == 'yes' ? "selected" : "" }} value="yes">Si</option>
</select>

<label for="">Descripción</label>
<textarea name="description" id="" class="form-control"  cols="30" rows="10"> {{ old("description", $post->description) }}</textarea>

<label for="">Contenido</label>
<textarea name="content" id="" class="form-control" cols="30" rows="10"> {{ old("content", $post->content) }}</textarea>


<label>Imagen</label>
<input type="file" name="image">

<br>
<br>
<button class="btn btn-success" type="submit">
    Guardar
</button>