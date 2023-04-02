@extends('admin.layout.layout')

@section('title','Edite')

@section('main_contnet')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edite course <span class="text-info"> {{ $course->title }}</span></h6>
                {{-- show the error from validation  --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('UpdateCourse.admin',$course->id) }}" method="POST" novalidate>
                    @csrf
                    {{-- title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input value="{{ old('title',$course->title) }}" name="title" type="text" class="form-control" id="title" required>
                    </div>
                    {{-- Description --}}
                    <div class="mb-3 ">
                        <label for="description" class="form-label">Description</label>
                        <input value="{{ old('description',$course->description) }}" name="description" type="text" aria-label="Sizing example input" class="form-control"
                            id="description" required>
                    </div>
                    {{-- Duration --}}
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input value="{{ old('duration',$course->duration) }}" name="duration" type="text" aria-label="Sizing example input" class="form-control"
                            id="duration" required>
                    </div>
                    {{-- Status --}}
                    <div class="mb-3">
                        <label for="duration" class="form-label">Status</label>
                        <select id="list" name="status" class="form-select" aria-label="Default select example" required>
                            <option value="soon">soon</option>
                            <option value="in progress">in progress</option>
                            <option value="completed">completed</option>
                        </select>
                    </div>
                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input value="{{ old('price',$course->price) }}" name="price" type="number" aria-label="Sizing example input" class="form-control"
                            id="price" required>
                    </div>
                    {{-- Category --}}
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select name="category_id" class="form-select" aria-label="Default select example" required>
                            @foreach ($categories as $category)
                                <option  {{ $course->category_id==$category->id? 'selected':'' }} value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach

                        </select>
                    </div>
                    {{-- submet buttom --}}
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script>
        var list =document.getElementById("list");
        for (let index = 0; index < list.length; index++) {
            if(list[index].innerHTML=='{{ $course->status }}'){
                list[index].selected = 'selected';
            }

        }
    </script>
@endpush