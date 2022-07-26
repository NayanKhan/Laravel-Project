<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Symfony\Contracts\Service\Attribute\Required;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::orderBy('id', 'ASC') ->get();
        return view('backend.pages.branch.manage', compact('branches') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required | max:255',
            'phone' => 'required | max:255',
        ],[
            'name.required' => 'Branch Name Can Not be Empty!',
            'phone.required' => 'Phone Number Can Not be Empty!'
        ]);


        $branch = new Branch();
        $branch->name               = $request->name;
        $branch->bangla_name        = $request->bangla_name;
        $branch->slug               = Str::slug($request->name);
        $branch->address_line1      = $request->address1;
        $branch->address_line2      = $request->address2;
        $branch->phone              = $request->phone;
        $branch->status             = $request->status;

        $branch-> save();
        return redirect()->route('branch.manage')->with('success', 'New Branch Added Succesfully');
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
        $branch = Branch::find($id);
        if( !is_null ($branch) ){
            return view ('backend.pages.branch.edit', compact('branch'));
        }
        else{
            return route('branch.manage');
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
        $branch = Branch::find($id);
        $branch->name               = $request->name;
        $branch->bangla_name        = $request->bangla_name;
        $branch->slug               = Str::slug($request->name);
        $branch->address_line1      = $request->address1;
        $branch->address_line2      = $request->address2;
        $branch->phone              = $request->phone;
        $branch->status             = $request->status;

        $branch-> save();
        return redirect()->route('branch.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
         
        if( !is_null ($branch) ){
            $branch->delete(); 
            return redirect()->route('branch.manage');
        }
    }
}
