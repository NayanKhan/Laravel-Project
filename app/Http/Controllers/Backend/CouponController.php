<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $coupons = Coupon::orderBy('code', 'ASC') ->get();
        return view('backend.pages.coupon.manage', compact('coupons') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = new Coupon ();
        
        $coupon->code               = $request->code;
        $coupon->discount_type      = $request->discount_type;
        $coupon->course_type        = $request->course_type;
        $coupon->fixed_value        = $request->fixed_value;
        $coupon->percent_value      = $request->percent_value;
        $coupon->status             = $request->status;

        $coupon->save();
        return redirect()->route('coupon.manage')->with('success', 'New Coupon Added Succesfully');
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
        $coupon = Coupon::find($id);
        if(!is_null($coupon) ){
            return view ('backend.pages.coupon.edit', compact('coupon'));
        }else{
            return route('coupon.manage');
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
        $coupon = Coupon::find($id);
        $coupon->code               = $request->code;
        $coupon->discount_type      = $request->discount_type;
        $coupon->course_type        = $request->course_type;
        $coupon->fixed_value        = $request->fixed_value;
        $coupon->percent_value      = $request->percent_value;
        $coupon->status             = $request->status;

        $coupon-> save();
        return redirect()->route('coupon.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->route('coupon.manage');
    }
}
