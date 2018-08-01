@extends('layouts.master')

@section('content')


    <div class="col-sm-8 blog-main">
        

        <div class="blog-post">
            <h2 class="blog-post-title">
                    {{ $user->name }}
            </h2>

            
            <p class="blog-post-meta">
                Account created on {{ $user->created_at->toDayDateTimeString() }}
            </p>

            <h3 class="blog-post-meta">
                About you
            </h3>
            <div style="padding-left:60px">
                <p class="blog-post-meta">
                    Email: {{ $user->email }}
                </p>
            </div>

            <h3 class="blog-post-meta">
                Your posts
            </h3>

            @foreach($user->posts as $post)
                <div style="padding-left:60px">
                    <h4 style="display:inline-block">
                        <a href="/posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h4><br>
                    <p class="blog-post-meta">
                        Updated on {{ $post->updated_at->toDayDateTimeString() }}
                    </p>
                </div>
            @endforeach

            <div class="w3-button w3-blue">
                <a href="/register/{{ Auth::user()->id }}/edit" class="w3-bar-item w3-button">Edit my account</a>
            </div>

        </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->
@endsection
















