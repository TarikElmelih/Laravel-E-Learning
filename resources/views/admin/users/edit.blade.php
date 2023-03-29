@extends('admin.users.app')
@section('title','Edit User')
@section('content')
<div class="container-fluid pt-4 px-4"> 
    {{-- Users table card --}} 
    <div class="row g-8"> 
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit {{$user['name']}}</h6>
                <form action="{{'/admin/users/Update/'.$user['id']}}" method="post" enctype="multipart/form-data" class="form">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user['id'] }}"> 

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingName" value="{{$user['name']}}" required>
                        <label for="floatingName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" value="{{$user['email']}}" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="floatingPassword" value="{{$user['password']}}" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="major" id="floatingMajor" value="{{$user['major']}}" required>
                        <label for="floatingMajor">Major</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="role" id="floatingSelect"
                            aria-label="Floating label select example" required>
                            <option selected>Select role</option>
                            <option value="SuperAdmin"{{$user->role =="SuperAdmin" ? 'selected' : ''}}>SuperAdmin</option>
                            <option value="Admin"{{$user->role =="Admin" ? 'selected' : ''}}>Admin</option>
                            <option value="User"{{$user->role =="User" ? 'selected' : ''}}>User</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="status" id="floatingSelect"
                            aria-label="Floating label select example" required>
                            <option selected>Select Sataus</option>
                            <option value="Active"{{$user->status =="Active" ? 'selected' : ''}}>Active</option>
                            <option value="Not Active"{{$user->status =="Not Active" ? 'selected' : ''}}>Not Active</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="point" id="floatingPoint" value="{{$user['point']}}">
                        <label for="floatingPoint">Piont</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="remain" id="floatingremain" value="{{$user['remain']}}">
                        <label for="floatingremain">Remain</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Your picture</label>
                        <input class="form-control" type="file" id="formFile" name="picture">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection