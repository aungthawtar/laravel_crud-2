@extends('layouts/master')
@section('content')
<div class="container">
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
                    <div>
                    <a href="{{url("admin/post/")}}" class="btn btn-info float-left">Back</a>
                    </div>
                    <div class="float-right">
                    <a href="{{url("admin/post/$post->id/edit")}}" class="btn btn-secondary">Edit</a>
                    <a href="{{url("admin/post/$post->id/delete")}}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection