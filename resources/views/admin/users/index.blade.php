@extends('admin.users.app')
@section('title','Show Users')

@section('content')

<div class="container-fluid pt-4 px-4"> 
    {{-- Users table card --}} 
    <div class="row g-8"> 
        <div class="col-sm-12 col-xl-12"> 
         <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4" style="display: inline;">Users</h6>
                {{-- add button --}}
                <a href="{{'/admin/users/createPage'}}" class="btn btn-primary" style="float: right;">Add New User</a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Major</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Points</th>
                            <th scope="col">Remain</th>
                            <th scope="col">picture</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->major}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->point}}</td>
                        <td>{{$user->remain}}</td>
                        <td>
                            <img height="30px" width="30px" src="{{asset('imgs/users/'.$user->picture)}}">
                        </td>
                        <td> 
                            <button onclick="location.href='{{'/admin/users/Edit/'.$user['id'] }}'" type="button" class="btn btn-success btn-sm">Edit</button>
                            <form style="display: inline;" action="{{ '/admin/users/Delete/'.$user['id']}}" method="POST">
                                 @csrf
                                 @method('delete') 
                                <input type="hidden" name="id" value="{{ $user['id'] }}">
                                <button onclick="return confirm('Are you sure you want delete {{ $user['name'] }} user ?')" type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form> 
                        </td>
                    </tr>
                    @endforeach
                 
                    </tbody>
                </table>
         </div>
        </div>
    </div>
</div>

@endsection