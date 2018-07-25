<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <p class="blog-post-meta">
        by {{ $post->user->name }}
        on {{ $post->created_at->toDayDateTimeString() }}
    </p>

    {{ $post->body }}
    <br>
    @foreach($post->images as $image)
        <img class="rounded"  width="304" src="{{ URL::asset('/images/'.$image->name) }}" alt="">
    @endforeach
    <br>
</div><!-- /.blog-post -->