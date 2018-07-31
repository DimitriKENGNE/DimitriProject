@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1> Edit a post </h1>

        <hr>

        <form method="post" action="/posts/update/{{$id}}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" autofocus>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="3" class="form-control" >{{$post->body}}</textarea>
            </div>

            @foreach($post->images as $image)
                <div style="display:inline-block">
                    <img class="rounded" width="304" src="{{ URL::asset('/images/'.$image->name) }}" alt=""><br>
                    <button type="button" class="btn btn-danger ml-auto delete-btn" ><i class="material-icons" style="color:white">delete</i></button>

                    <div class="sidebar-module sidebar-module-inset flash-alert">
                        <p>Do you really want to delete this picture ?</p>

                        <button type="button" class="btn btn-danger hide-alert">No</button>
                        <a class="btn btn-primary" href="/image/{{ $image->id }}/delete">Yes</a>
                    </div>
                </div>
            @endforeach

            <label for="filename"> Add pictures on the post </label>
            <div class="input-group control-group increment" >
                <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <div class="clone hide">
                <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save change</button>
            </div>



        </form>


        @include('layouts.errors')





    </div>

    <script type="text/javascript">

        $(document).ready(function() {

            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });

        });

    </script>
@endsection

