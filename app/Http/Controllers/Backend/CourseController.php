<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Course;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\str;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'ASC') ->get();
        return view('backend.pages.course.manage', compact('courses') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->english_title          = $request->english_title;
        $course->bangla_title           = $request->bangla_title;
        $course->slug                   = Str::slug($request->english_title);
        $course->intro_video            = $request->intro_video;
        $course->price                  = $request->price;
        $course->bangla_price           = $request->bangla_price;
        $course->graduate_number        = $request->graduate_number;
        $course->total_lecture          = $request->total_lecture;
        $course->class_hour             = $request->class_hour;
        $course->course_duration        = $request->course_duration;
        $course->motiv_content          = $request->motiv_content;
        $course->course_opportunity     = $request->course_opportunity;
        $course->curriculum_desc        = $request->curriculum_desc;
        $course->course_reqirement      = $request->course_reqirement;
        $course->coupon_status          = $request->coupon_status;
        $course->status                 = $request->status;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/course/' . $img);
            Image::make($image)->save($location);
            $course->image = $img;
        }

        $course-> save();
        return redirect()->route('course.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        if( !is_null ($course) ){
            return view ('backend.pages.course.edit', compact('course'));
        }
        else{
            return route('course.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->english_title          = $request->english_title;
        $course->bangla_title           = $request->bangla_title;
        $course->slug                   = Str::slug($request->english_title);
        $course->intro_video            = $request->intro_video;
        $course->price                  = $request->price;
        $course->bangla_price           = $request->bangla_price;
        $course->graduate_number        = $request->graduate_number;
        $course->total_lecture          = $request->total_lecture;
        $course->class_hour             = $request->class_hour;
        $course->course_duration        = $request->course_duration;
        $course->motiv_content          = $request->motiv_content;
        $course->course_opportunity     = $request->course_opportunity;
        $course->curriculum_desc        = $request->curriculum_desc;
        $course->course_reqirement      = $request->course_reqirement;
        $course->coupon_status          = $request->coupon_status;
        $course->status                 = $request->status;

        if( !empty($request->image) ){
            if( File::exists('backend/img/course/'. $course->image));
            {
                File::delete('backend/img/course/'. $course->image);
            }
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/course/' . $img);
            Image::make($image)->save($location);
            $course->image = $img;
        }

        $course-> save();
        return redirect()->route('course.manage');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if( File::exists('backend/img/course/'. $course->image));
        {
            File::delete('backend/img/course/'. $course->image);
        }
        $course->delete();
        return redirect()->route('course.manage');

    }
}
