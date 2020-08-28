@extends('layouts/master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <a href="{{url("admin/category/create")}}" class="btn btn-primary mb-4">Create</a>
        <div class="card">
            <div class="card-header">Category Lists</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td><span class="badge bg-warning">50</span></td>
                            <td>
                                <a href="{{url("admin/category/$category->id/edit")}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url("admin/category/$category->id/delete")}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection