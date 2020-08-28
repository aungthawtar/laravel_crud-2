@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Manage User</h2>
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="name" class="form-control" value="{{$user->email}}">
                    </div>
                    <div>
                    @foreach($roles as $role)
                        <input type="checkbox" name="role_ids[]"  value="{{$role->id}}" id="role{{$role->id}}"
                        @foreach($user->roles as $userRole)
                            @if($userRole->name == $role->name)
                                checked
                            @endif
                        @endforeach
                        >
                        <label for="role{{$role->id}}">{{$role->name}}</label><br>
                    @endforeach
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Add Role</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection