<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('student')->group(function () {
    Route::get('/home',[HomeController::class,'ShowHome'])->name('home.show');
    Route::get('/ShowCourses/{user_id}',[HomeController::class,'ShowCourses'])->name('ShowCourses.user');
    Route::get('/ShowCoursesDetails/{course_id}',[StudentController::class,'CourseDetails'])->name('ShowCoursesDetails.user');
    Route::post('/RegisterOnCourse/{course_id}/{user_id}',[StudentController::class,'CourseEnrollment'])->name('CourseEnrollment');
});
Route::middleware('auth')->prefix('admin/courses')->group(function () {
    Route::get('/Show',[AdminCourseController::class,'Show'])->name('ShowCourses.admin');
    Route::get('/ShowDetails/{course_id}',[AdminCourseController::class,'CourseDetails'])->name('ShowCoursesDetails.admin');
    Route::get('/Edit/{course_id}',[AdminCourseController::class,'CourseEdit'])->name('EditCourse.admin');
    Route::get('/create',[AdminCourseController::class,'ShowAddCourse'])->name('addCourse.admin');
    Route::post('/Update/{course_id}',[AdminCourseController::class,'Edit'])->name('UpdateCourse.admin');
    Route::delete('/Delete/{course_id}',[AdminCourseController::class,'Delete'])->name('DeleteCourse.admin');
    Route::post('/Create',[AdminCourseController::class,'Create'])->name('CreateCourse.admin');
});
Route::middleware('auth')->prefix('admin/users')->group(function () {
    Route::get('/Show',[AdminUserController::class,'Show'])->name('ShowUsers.admin');
    Route::get('/Edit/{user_id}',[AdminUserController::class,'UserDetails'])->name('EditUser.admin');
    Route::post('/Update/{user_id}',[AdminUserController::class,'Edit'])->name('UpdateUser.admin');
    Route::delete('/Delete/{user_id}',[AdminUserController::class,'Delete'])->name('DeleteUser.admin');
    Route::post('/Create',[AdminUserController::class,'Create'])->name('CreateUser.admin');
});

require __DIR__.'/auth.php';
