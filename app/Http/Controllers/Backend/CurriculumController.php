<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Course;
use App\Models\Backend\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use file;
use Image;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = Curriculum::orderBy('id', 'ASC') ->get();
        return view('backend.pages.curriculum.manage', compact('curriculums') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderBy('english_title', 'ASC') ->get();
        return view('backend.pages.curriculum.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curriculum = new Curriculum();
        
        $curriculum->course_id              = $request->course_id;
        $curriculum->one_en                 = $request->one_en;
        $curriculum->one_bn                 = $request->one_bn;
        $curriculum->one_desc               = $request->one_desc;
        $curriculum->two_en                 = $request->two_en;
        $curriculum->two_bn                 = $request->two_bn;
        $curriculum->two_desc               = $request->two_desc;
        $curriculum->three_en               = $request->three_en;
        $curriculum->three_bn               = $request->three_bn;
        $curriculum->three_desc             = $request->three_desc;
        $curriculum->four_en                = $request->four_en;
        $curriculum->four_bn                = $request->four_bn;
        $curriculum->four_desc              = $request->four_desc;
        $curriculum->five_en                = $request->five_en;
        $curriculum->five_bn                = $request->five_bn;
        $curriculum->five_desc              = $request->five_desc;
        $curriculum->status                 = $request->status;

       
        $curriculum->save();
        return redirect()->route('curriculum.manage');
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
        $curriculum = Curriculum::find($id);
        $courses = Course::orderBy('english_title', 'ASC') ->get();
        if( !is_null ($curriculum) ){
            return view ('backend.pages.curriculum.edit', compact('curriculum', 'courses'));
        }
        else{
            return route('curriculum.manage');
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
        $curriculum = Curriculum::find($id);

        $curriculum->course_id              = $request->course_id;
        $curriculum->one_en                 = $request->one_en;
        $curriculum->one_bn                 = $request->one_bn;
        $curriculum->one_desc               = $request->one_desc;
        $curriculum->two_en                 = $request->two_en;
        $curriculum->two_bn                 = $request->two_bn;
        $curriculum->two_desc               = $request->two_desc;
        $curriculum->three_en               = $request->three_en;
        $curriculum->three_bn               = $request->three_bn;
        $curriculum->three_desc             = $request->three_desc;
        $curriculum->four_en                = $request->four_en;
        $curriculum->four_bn                = $request->four_bn;
        $curriculum->four_desc              = $request->four_desc;
        $curriculum->five_en                = $request->five_en;
        $curriculum->five_bn                = $request->five_bn;
        $curriculum->five_desc              = $request->five_desc;
        $curriculum->status                 = $request->status;

       
        $curriculum->save();
        return redirect()->route('curriculum.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculum = Curriculum::find($id);
        $curriculum->delete();
        return redirect()->route('curriculum.manage');
    }
}
