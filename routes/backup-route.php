<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Website Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
|--------------------------------------------------------------------------
| Backend Admin Panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([ 'prefix' => 'admin' ], function(){
    Route::get('/dashboard', "App\Http\Controllers\Backend\DashboardController@dasboard")->name('admin.dasboard');
    

    // This Route Are For Branch Management
    Route::prefix('/branch')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\BranchController@index') ->name('branch.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BranchController@create') ->name('branch.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BranchController@store') ->name('branch.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BranchController@edit') ->name('branch.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BranchController@update') ->name('branch.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BranchController@destroy') ->name('branch.destroy');
    });


    // This Route Are For Course Management
    Route::prefix('/course')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\CourseController@index') ->name('course.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CourseController@create') ->name('course.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CourseController@store') ->name('course.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CourseController@edit') ->name('course.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CourseController@update') ->name('course.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CourseController@destroy') ->name('course.destroy');
    });

    // This Route Are For Coupon Management
    Route::prefix('/coupon')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\CouponController@index') ->name('coupon.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CouponController@create') ->name('coupon.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CouponController@store') ->name('coupon.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CouponController@edit') ->name('coupon.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CouponController@update') ->name('coupon.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CouponController@destroy') ->name('coupon.destroy');
    });

    // This Route Are For Course Curriculum Management
    Route::prefix('/curriculum')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\CurriculumController@index') ->name('curriculum.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CurriculumController@create') ->name('curriculum.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CurriculumController@store') ->name('curriculum.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CurriculumController@edit') ->name('curriculum.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CurriculumController@update') ->name('curriculum.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CurriculumController@destroy') ->name('curriculum.destroy');
    });

    // This Route Are For Batch Management
    Route::prefix('/batch')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\BatchController@index') ->name('batch.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BatchController@create') ->name('batch.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BatchController@store') ->name('batch.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BatchController@edit') ->name('batch.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BatchController@update') ->name('batch.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BatchController@destroy') ->name('batch.destroy');
    });

    // This Route Are For Mentor Management
    Route::prefix('/mentor')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\MentorController@index') ->name('mentor.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\MentorController@create') ->name('mentor.create');
        Route::post('/store', 'App\Http\Controllers\Backend\MentorController@store') ->name('mentor.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\MentorController@edit') ->name('mentor.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\MentorController@update') ->name('mentor.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\MentorController@destroy') ->name('mentor.destroy');
    });




});
