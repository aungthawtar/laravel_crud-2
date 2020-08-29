@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible show fade">{{session('success')}}
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users Table</h3>

                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                                <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="badge badge-primary">{{$role->name}}</span>
                                    @endforeach
                                </td>
                                <td>{{$user->status}}</td>
                                <td>
                                    <a href="{{url("admin/users/$user->id/edit")}}" class="btn btn-primary btn-sm">Manage Role</a>
                                    <!-- <a href="{{url("admin/users/$user->id/edit")}}" class="btn btn-secondary btn-sm">Manage Status</a> -->
                                    <a href="{{url("admin/users/$user->id/edit")}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{url("admin/users/$user->id/delete")}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection