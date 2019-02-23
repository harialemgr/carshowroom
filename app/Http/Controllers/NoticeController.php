<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        foreach($notices as $notice){
            $notice->images = unserialize($notice->image);
        }
        return view('admin.notices.view', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notices.add');
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

                $paths = 'images/notice/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $imagearray[] = $fileNameToStore;
            }

        } else {
            $fileNameToStore = 'noimage.jpg';
            $imagearray[] =$fileNameToStore;
        }
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        //$notice->notice_category_id = $request->category;
        $notice->image = serialize($imagearray);
        $notice->publish=$status;

        $notice->save();

        return redirect()->route('notice.index');
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
        $notice = Notice::find($id);
        $notice->images = unserialize($notice->image);
        return view('admin.notices.edit', compact('notice'));
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

                $paths = 'images/notice/';
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



        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        //$notice->page_category_id = $request->category;
        $notice->image = serialize($abc);
        $notice->publish=$status;

        $notice->save();

        return redirect()->route('notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
       
        $notice->delete();
       
        return redirect()->back();
    }
}
