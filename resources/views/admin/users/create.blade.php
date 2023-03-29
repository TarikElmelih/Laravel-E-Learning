@extends('admin.users.app')
@section('title','Create User')
@section('content')
<div class="container-fluid pt-4 px-4"> 
    {{-- Users table card --}} 
    <div class="row g-8"> 
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create New User</h6>
                <form action="{{'/admin/users/Create'}}" method="post" enctype="multipart/form-data" class="form">
                    @csrf
                    
                    <div class="form-floating mb-3">
                        <label for="floatingName">Name</label>
                        <input type="text" name="name" id="floatingName" required class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Email address</label>
                        <input type="email" name="email" id="floatingInput" required class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingPassword">Password</label>
                        <input type="password" name="password" id="floatingPassword" required class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingMajor">Major</label>
                        <input type="text" name="major" id="floatingMajor" required class="form-control @error('major') is-invalid @enderror">
                        @error('major')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="role" id="floatingSelect"
                            aria-label="Floating label select example" required>
                            <option selected>Select role</option>
                            <option value="SuperAdmin">SuperAdmin</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="status" id="floatingSelect"
                            aria-label="Floating label select example" required>
                            <option selected>Select Sataus</option>
                            <option value="Active">Active</option>
                            <option value="Not Active">Not Active</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingPoint">Piont</label>
                        <input type="number" class="form-control" name="point" id="floatingPoint">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingremain">Remain</label>
                        <input type="number" class="form-control" name="remain" id="floatingremain">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Your picture</label>
                        <input type="file" id="formFile" name="picture" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection