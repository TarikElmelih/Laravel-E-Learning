<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\course;
use App\Models\category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class AdminCourseController extends Controller
{
    public function Show()
    {
        $courses = course::withCount('users')->with('category')->get();

        return view('admin.courses', compact('courses'));
    }
    public function ShowAddCourse()
    {
        $categories = category::all();

        return view('admin.addCourse', compact('categories'));
    }
    public function CourseEdit($course_id)
    {

        $categories = category::all();
        $course = course::findOrFail($course_id);
        return view('admin.editCourse', compact('categories', 'course'));
    }
    public function CourseDetails($course_id)
    {
        $course_id = (int)$course_id;
        $course = course::where('id', $course_id)->first();
        $categories = category::all();
        return view('admin.EditeCourse', compact('course', 'categories'));
    }
    public function Create(CourseRequest $request)
    {

        $course = new course();
        $course->title          = $request->input('title');
        $course->description    = $request->input('description');
        $course->category_id    = $request->input('category_id');
        $course->duration       = $request->input('duration');
        $course->status         = $request->input('status');
        $course->price          = $request->input('price');
        $course->save();

        return Redirect::route('ShowCourses.admin')->with('status', 'add course');
    }
    public function Edit(CourseRequest $request, $course_id)
    {

        $course = course::find($course_id);
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->category_id = $request->input('category_id');
        $course->duration = $request->input('duration');
        $course->status = $request->input('status');
        $course->price = $request->input('price');
        $course->update();

        return Redirect::route('ShowCourses.admin')->with('status', 'edit course');
    }
    public function Delete($course_id)
    {

        Course::findOrFail($course_id)->delete();

        return Redirect::route('ShowCourses.admin')->with('status', 'delete course');
    }

    public function add()
    {
        $categories = category::all();
        return view('admin.addCourse', compact('categories'));
    }
}
