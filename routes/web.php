<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteRegistrar;
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
    Route::get('/Edit/{course_id}',[AdminCourseController::class,'CourseDetails'])->name('EditCourse.admin');
    Route::post('/Update/{course_id}',[AdminCourseController::class,'Edit'])->name('UpdateCourse.admin');
    Route::delete('/Delete/{course_id}',[AdminCourseController::class,'Delete'])->name('DeleteCourse.admin');
    Route::get('/ADD',[AdminCourseController::class,'add'])->name('add.admin');
    Route::post('/Create',[AdminCourseController::class,'Create'])->name('CreateCourse.admin');
});
Route::middleware('auth')->prefix('admin/category')->group(function () {
    Route::get('/Show',[AdminCategoryController::class,'Show'])->name('ShowCategories.admin');
    Route::get('/Edit/{category_id}',[AdminCategoryController::class,'EditShow'])->name('EditCategories.admin');
    Route::post('/Update/{category_id}',[AdminCategoryController::class,'Edit'])->name('UpdateCategories.admin');
    Route::delete('/Delete/{category_id}',[AdminCategoryController::class,'Delete'])->name('DeleteCategories.admin');
    Route::get('/Create',[AdminCategoryController::class,'Create'])->name('CreateCategory.admin');
    Route::post('/Store',[AdminCategoryController::class,'Store'])->name('StoreCourse.admin');

});
Route::middleware('auth')->prefix('admin/users')->group(function () {
    Route::get('/Show',[AdminUserController::class,'Show'])->name('ShowUsers.admin');
    Route::get('/Edit/{user_id}',[AdminUserController::class,'UserDetails'])->name('EditUser.admin');
    Route::post('/Update/{user_id}',[AdminUserController::class,'Edit'])->name('UpdateUser.admin');
    Route::delete('/Delete/{user_id}',[AdminUserController::class,'Delete'])->name('DeleteUser.admin');
    Route::get('/Create',[AdminUserController::class,'Create'])->name('CreateUser.admin');
    Route::post('/Store',[AdminUserController::class,'Store'])->name('StoreUser.admin');
});

require __DIR__.'/auth.php';
