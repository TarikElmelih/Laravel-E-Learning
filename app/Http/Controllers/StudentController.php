<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\CourseVideos;
use App\Models\Comment;


class StudentController extends Controller
{


  public function CourseDetails($cours_id){

    $courseinfo=Course::find($cours_id);


      $comments= Comment::find($cours_id);



      $courseVideos= CourseVideos::find($cours_id);

 return view('courseDetails',compact('courseInfo','courseVideos','comments'));

    }

  public function  CourseEnrollment($course_id,$user_id){

   $user= User::find($user_id);

   $user->courses()->attach($course_id);

   $courseinfo=Course::find($cours_id);

   $comments= Comment::find($cours_id);

   $courseVideos= CourseVideos::find($cours_id);

   return view('courseDetails',compact('courseInfo','courseVideos','comments'))->with('massage','success enrolments');

    }
}


