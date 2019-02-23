<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\MemberCategory;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        foreach($members as $member){
        $member->images = unserialize($member->image);
        }
        return view('admin.members.view',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $member_categories = MemberCategory::all();
        return view('admin.members.add', compact('member_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        if($request->status == 1){
            $status = 1;
        }else{
            $status=0;
        }


        $imagearray=[];
        if ( $request->hasFile('image')) {
            foreach ($request->image as $image) {

                $paths = 'images/member/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $imagearray[] = $fileNameToStore;
            }

        } else {
            $fileNameToStore = 'noimage.jpg';
            $imagearray[] =$fileNameToStore;
        }
        $member = new Member();
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->address = $request->address;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->member_category_id = $request->category;
        $member->image = serialize($imagearray);
        $member->nature_of_appointment =$request->natureofappointment;
        $member->qualification = $request->qualification;
       // $member->publish=$status;

        $member->save();

        return redirect()->route('member.index');
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
        $member = Member::find($id);
        $member_categories = MemberCategory::all();
        $member->images = unserialize($member->image);
        return view('admin.members.edit',compact('member', 'member_categories'));
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
        if($request->status == 1){
            $status = 1;
        }else{
            $status=0;
        }

        $imagearray=[];
        if ( $request->hasFile('image')) {
            foreach ($request->image as $image) {

                $paths = 'images/member/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $imagearray[] = $fileNameToStore;

            }
            //$abc=array_merge($imagearray,$request->updateimage);
            $abc = $imagearray;



        } else {


            $abc =$request->updateimage;

        }

        if($abc == null){
            $abc = Array('noimage.jpg');
        }



        $member = Member::find($id);
        $member->name = $request->name;
        //$member->summary = $request->editor1;
        $member->member_category_id = $request->category;
        $member->image = serialize($abc);
       // $member->publish=$status;
        $member->designation= $request->designation;
        $member->address = $request->address;
        $member->phone =$request->phone;
        $member->email=$request->email;
        $member->nature_of_appointment =$request->natureofappointment;
        $member->qualification = $request->qualification;
        $member->save();

        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->back();
    }
}
