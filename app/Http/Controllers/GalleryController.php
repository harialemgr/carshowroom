<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\GalleryCategory;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_categories = GalleryCategory::all();
        return view('admin.gallery.view', compact('gallery_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $gallery_categories = GalleryCategory::all();
     return view('admin.gallery.add', compact('gallery_categories'));
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

                $paths = 'images/gallery/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $gallery = new Gallery();
                $gallery->description = $request->description;
                $gallery->gallery_category_id = $request->category;
                // $gallery->video_link =$request->video;
                $gallery->image = $fileNameToStore;
                //$gallery->publish=$status;
                $gallery->save();
               
            }
        }

        return redirect()->route('gallery.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        File::delete('images/gallery/'.$gallery->image);
        $gallery->delete();
        return redirect()->back();
    }
}
