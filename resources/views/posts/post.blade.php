<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    @foreach($post->filenames as $filename )
    <img src="" alt="">
    <p class="blog-post-meta">
        by {{ $post->user->name }}
        on {{ $post->created_at->toDayDateTimeString() }}
    </p>

    {{ $post->body }}
</div><!-- /.blog-post -->