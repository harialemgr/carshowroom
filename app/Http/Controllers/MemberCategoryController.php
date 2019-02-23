<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberCategory;

class MemberCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member_categories = MemberCategory::all();
        return view('admin.membercategory.view', compact('member_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.membercategory.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member_category = new MemberCategory();
        $member_category->title = $request->title;
        $member_category->description = $request->description;
        $member_category->save();
        return redirect(route('membercategory.index'));
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
        $member_category = MemberCategory::find($id);
        return view('admin.membercategory.edit', compact('member_category'));
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
        $member_category = MemberCategory::find($id);
        $member_category->title = $request->title;
        $member_category->description =$request->description;
        $member_category->save();
            return redirect(route('membercategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member_category = MemberCategory::find($id);
        $member_category->delete();
        return redirect()->back();
    }
}
