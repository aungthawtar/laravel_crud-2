@extends('layouts/master')
@section('content')
<a href="{{url("admin/post/create")}}" class="btn btn-primary">Create</a>
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                    {{$post->content}}
                </div>
                <div class="card-footer">
                    <a href="{{url("admin/post/$post->id")}}" class="btn btn-info float-right">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection