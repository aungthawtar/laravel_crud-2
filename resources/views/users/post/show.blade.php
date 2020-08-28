@extends('users/layouts/master')
@section('title','Post')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                    <div>
                    <img src="{{isset($post->image)? asset($post->image) : 'https://via.placeholder.com/150'}}" class="img-thumbnail" alt="image">
                    </div>
                    {{$post->content}}
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="" class="btn btn-dark">Download</a>
                        <a href="{{url("/post")}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection