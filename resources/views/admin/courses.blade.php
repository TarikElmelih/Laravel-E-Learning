@extends('admin.layout.layout')

@section('title', 'Courses')

@section('main_contnet')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4" style="display: inline;">Courses</h6>
                    {{-- add button --}}
                    <button onclick="window.location.href='{{ route('add.admin') }}';"
                        class="btn btn-primary"style="float: right;">ADD</button>
                    <div class="table-responsive">
                        <table class="table table-hover" id='co'>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">status</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">student Count</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $course->id }}</th>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->description }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td><span>{{ $course->status }}</span> </td>
                                        <td>{{ $course->price }}</td>
                                        <td>{{ $course->category->title }}</td>
                                        <td>{{ $course->users_count }}</td>
                                        <td>
                                            <button style="display: inline;"
                                                onclick="location.href='{{ route('EditCourse.admin', $course->id) }}'"
                                                type="button" class="btn  btn-success btn-sm">Edite
                                            </button>

                                            <form style="display: inline;"
                                                action="{{ route('DeleteCourse.admin', $course->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input " type="hidden" name="id" value="{{ $course->id }}"/>
                                                                <button onclick="return confirm('Are you sure you want delete {{ $course->title }} Course?')"
                                                                                            type="submit"  class="btn  btn-danger btn-sm">delete
                                                                                            {{-- <i style=" color: red" class="fa fa-trash"></i> --}}</button>
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
    </div>
@endsection

@push('script')
    <script>
        var table = document.getElementById("co");
        for (var i = 1; i < table.rows.length; i++) {
            var cell = table.rows[i].cells[4].querySelector("span");
            if (cell.innerHTML == 'soon') {
                document.getElementById("co").rows[i].cells[4].querySelector("span").classList.add("badge", "bg-warning");

            } else if (cell.innerHTML == 'in progress') {
                document.getElementById("co").rows[i].cells[4].querySelector("span").classList.add("badge", "bg-primary");

            } else {

                document.getElementById("co").rows[i].cells[4].querySelector("span").classList.add("badge", "bg-success");

            }
        }
    </script>
@endpush
