<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Mentor;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\str;
use Image;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $mentors = Mentor::orderBy('id', 'ASC') ->get();
        return view('backend.pages.mentor.manage', compact('mentors') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor = new Mentor();
        $mentor->fullname               = $request->fullname;
        $mentor->designation            = $request->designation;
        $mentor->slug                   = Str::slug($request->fullname);
        $mentor->overview               = $request->overview;
        $mentor->phone                  = $request->phone;
        $mentor->email                  = $request->email;
        $mentor->address                = $request->address;
        $mentor->fiver_url              = $request->fiver_url;
        $mentor->upwork_url             = $request->upwork_url;
        $mentor->status                 = $request->status;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/mentor/' . $img);
            Image::make($image)->save($location);
            $mentor->profile_pic = $img;
        }

        if( $request->fiver_img ){
            $fiverr = $request->file('fiver_img');
            $fvr = rand(). '.' . $fiverr->getClientOriginalExtension();
            $location  = public_path('backend/img/mentor/badge/' . $fvr);
            Image::make($fiverr)->save($location);
            $mentor->fiver_img = $fvr;
        }

        if( $request->upwork_img ){
            $upwork = $request->file('upwork_img');
            $upr = rand(). '.' . $upwork->getClientOriginalExtension();
            $location  = public_path('backend/img/mentor/badge/' . $upr);
            Image::make($upwork)->save($location);
            $mentor->upwork_img = $upr;
        }

        
        $mentor->save();
        return redirect()->route('mentor.manage');
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
        $mentor = Mentor::find($id);
        if( !is_null ($mentor) ){
            return view ('backend.pages.mentor.edit', compact('mentor'));
        }
        else{
            return route('mentor.manage');
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
        $mentor = Mentor::find($id);
        $mentor->fullname               = $request->fullname;
        $mentor->designation            = $request->designation;
        $mentor->slug                   = Str::slug($request->fullname);
        $mentor->overview               = $request->overview;
        $mentor->phone                  = $request->phone;
        $mentor->email                  = $request->email;
        $mentor->address                = $request->address;
        $mentor->fiver_url              = $request->fiver_url;
        $mentor->upwork_url             = $request->upwork_url;
        $mentor->status                 = $request->status;

        if( !empty( $request->image) ){

            if( File::exists('backend/img/mentor/'. $mentor->profile_pic));
            {
                File::delete('backend/img/mentor/'. $mentor->profile_pic);
            }
            
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/mentor/' . $img);
            Image::make($image)->save($location);
            $mentor->profile_pic = $img;
        }
        
        if( !empty( $request->fiver_img) ){

            if( File::exists('backend/img/mentor/badge/'. $mentor->fiver_img));
            {
                File::delete('backend/img/mentor/badge/'. $mentor->fiver_img);
            }

            $fiverr = $request->file('fiver_img');
            $fvr = rand(). '.' . $fiverr->getClientOriginalExtension();
            $location  = public_path('backend/img/mentor/badge/' . $fvr);
            Image::make($fiverr)->save($location);
            $mentor->fiver_img = $fvr;
        }

        if( !empty( $request->upwork_img) ){

            if( File::exists('backend/img/mentor/badge/'. $mentor->upwork_img));
            {
                File::delete('backend/img/mentor/badge/'. $mentor->upwork_img);
            }

            $upwork = $request->file('upwork_img');
            $upr = rand(). '.' . $upwork->getClientOriginalExtension();
            $location  = public_path('backend/img/mentor/badge/' . $upr);
            Image::make($upwork)->save($location);
            $mentor->upwork_img = $upr;
        }

        $mentor-> save();
        return redirect()->route('mentor.manage');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::find($id);

        if( File::exists('backend/img/mentor/'. $mentor->profile_pic));
        {
            File::delete('backend/img/mentor/'. $mentor->profile_pic);
        }

        if( File::exists('backend/img/mentor/badge/'. $mentor->fiver_img));
        {
            File::delete('backend/img/mentor/badge/'. $mentor->fiver_img);
        }

        if( File::exists('backend/img/mentor/badge/'. $mentor->upwork_img));
        {
            File::delete('backend/img/mentor/badge/'. $mentor->upwork_img);
        }

        $mentor->delete();
        return redirect()->route('mentor.manage');
            
    }
}
