@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1> Publish a post </h1>

        <hr>

        <form method="post" action="/posts" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" autofocus>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="3" class="form-control"></textarea>
            </div>

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
                <button type="submit" class="btn btn-primary">Publish</button>
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

