<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use App\Http\Controllers\Universitycontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Usercontroller;
use App\Models\course;
use App\Models\job;
use App\Models\scholarship_links;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



Route::get('/',  [Usercontroller::class, 'index'])->name('index');
Route::get('/guide',  [Usercontroller::class, 'guide'])->name('guide');
Route::get('/contact',  [Usercontroller::class, 'contact'])->name('contact');
Route::get('/scholarship/{id}',  [Usercontroller::class, 'scholarshipdetail'])->name('scholarshippage');
Route::get('/job/{id}',  [Usercontroller::class, 'jobdetail'])->name('jobpage');
Route::get('/course/{id}',  [Usercontroller::class, 'coursedetail'])->name('coursepage');
Route::get('/university/{id}',  [Usercontroller::class, 'universitydetail'])->name('universitypage');
Route::get('/course',  [Usercontroller::class, 'course'])->name('courseread');
Route::get('/scholarship',  [Usercontroller::class, 'scholarship'])->name('scholarshipread');
Route::get('/job',  [Usercontroller::class, 'job'])->name('jobread');
Route::post('/wishlistscholarship/store',  [Usercontroller::class, 'wishlistscholarship'])->name('wishlistscholarshipadd');
Route::post('/wishlistjob/store',  [Usercontroller::class, 'wishlistjob'])->name('wishlistjobadd');
Route::post('/wishlistcourse/store',  [Usercontroller::class, 'wishlistcourse'])->name('wishlistcourseadd');
Route::post('/wishlistuniversity/store',  [Usercontroller::class, 'wishlistuniversity'])->name('wishlistuniversityadd');
Route::get('/wishlist',  [Usercontroller::class, 'wishlist'])->name('wishlist');
Route::delete('wishlistjobdelete/del/{id}', [Usercontroller::class, 'wishlistjobdelete'])->name('wishlistjobdestroy');
Route::delete('wishlistcoursedelete/del/{id}', [Usercontroller::class, 'wishlistcoursedelete'])->name('wishlistcoursedestroy');
Route::delete('wishlistuniversitydelete/del/{id}', [Usercontroller::class, 'wishlistuniversitydelete'])->name('wishlistuniversitydestroy');
Route::delete('wishlistscholarshipdelete/del/{id}', [Usercontroller::class, 'wishlistscholarshipdelete'])->name('wishlistscholarshipdestroy');
Route::get('/wishlistlogin',  [Usercontroller::class, 'wishlistlogin'])->name('wishlistlogin');

Route::get('/login', [Registercontroller::class, 'showLoginForm'])->name('login');
Route::get('/signup', [Registercontroller::class, 'showSignupForm'])->name('signup');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/loginsucess', [Registercontroller::class, 'login'])->name('loginsuccess');
Route::get('/logout', [Registercontroller::class, 'logout'])->name('logout');
Route::get('/forget-password', [Registercontroller::class, 'resetpasswordview'])->name('forget');
Route::post('/sendpassword', [Registercontroller::class, 'sendRandomPassword'])->name('randompassword');


Route::get('/admin/course', [Admin::class, 'course'])->name('dashboard');
Route::get('/admin/jobs', [Admin::class, 'job'])->name('jobs');
Route::get('/admin/scholarship', [Admin::class, 'scholarship'])->name('scholarship');
Route::get('/admin/universities', [Admin::class, 'uni'])->name('university');
Route::post('uni/store', [Admin::class, 'store'])->name('universities.store');
Route::delete('university/del/{id}', [Admin::class, 'delete'])->name('university.destroy');
Route::put('university/update/{id}', [Admin::class, 'update'])->name('university.update');
Route::get('/profile/update/{id}', [Admin::class, 'profileupdate'])->name('profile.update');
Route::post('/profile/update/{id}', [Admin::class, 'profileupdatepost'])->name('profile.updatesuccess');
Route::post('sch/scholarship', [Admin::class, 'scholarshipstore'])->name('scholarship.store');
Route::delete('scholarship/del/{id}', [Admin::class, 'scholarshipdelete'])->name('scholarship.destroy');
Route::put('scholarship/update/{id}', [Admin::class, 'scholarshipupdate'])->name('scholarship.update');
Route::post('course/store', [Admin::class, 'coursesto'])->name('course.store');
Route::delete('course/del/{id}', [Admin::class, 'coursedelete'])->name('course.destroy');
Route::put('course/update/{id}', [Admin::class, 'courseupdate'])->name('course.update');
Route::post('job/store', [Admin::class, 'jobstore'])->name('job.store');
Route::delete('job/del/{id}', [Admin::class, 'jobdelete'])->name('job.destroy');
Route::put('job/update/{id}', [Admin::class, 'jobupdate'])->name('job.update');