<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    
   @foreach ($posts as $item)
        <div class="card mb-5">
            <h3>{{ $item->title }}</h3>
            <a href="{{ route("web.blog.show", $item) }}">Ir</a>
            <p>{{ $item->description }}</p>
        </div>
    @endforeach
</div>