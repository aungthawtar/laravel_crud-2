@extends('layouts/master')
@section('content')
<a href="{{url("admin/post/$post->id")}}" class="btn btn-primary">Back</a>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="10">
                            {{$post->content}}
                        </textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection