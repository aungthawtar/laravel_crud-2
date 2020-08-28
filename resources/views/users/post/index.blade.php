@extends('users/layouts/master')
@section('title','Post')
@section('content')
@include('users/layouts/header')
<div class="container-fluid mt-5">
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
                    <a href="{{url("/post/$post->id")}}" class="btn btn-primary float-right">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection