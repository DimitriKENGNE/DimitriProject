@extends('layouts.master')

@section('content')


    <div class="col-sm-8 blog-main">
        

        <div class="blog-post">
            <h2 class="blog-post-title">
                    {{ $post->title }}
            </h2>
            <p class="blog-post-meta">
                {{ $post->created_at->toDayDateTimeString() }}
            </p>

            {{ $post->body }}
        </div><!-- /.blog-post -->

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>

                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        <div class="card">
            <div class="card-bloc">
                <form method="post" action="/posts/{{ $post->id }}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="1" placeholder="Your comment here." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>

                </form>

                @include('layouts.errors')
            </div>
        </div>

    </div><!-- /.blog-main -->
@endsection

















