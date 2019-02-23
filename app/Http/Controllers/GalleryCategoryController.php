<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryCategory;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_categories = GalleryCategory::all();
        return view('admin.gallerycategory.view', compact('gallery_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallerycategory.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery_category = new GalleryCategory();
        $gallery_category->title = $request->title;
        $gallery_category->description = $request->description;
        $gallery_category->save();
        return redirect(route('gallerycategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery_category = GalleryCategory::find($id);
        $galleries = $gallery_category->gallery;
        $videos = $gallery_category->video;
        return view('admin.gallery.show',compact('galleries','gallery_category','videos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery_category = GalleryCategory::find($id);
        return view('admin.gallerycategory.edit', compact('gallery_category'));
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
        $gallery_category = GalleryCategory::find($id);
        $gallery_category->title = $request->title;
        $gallery_category->description =$request->description;
        $gallery_category->save();
            return redirect(route('gallerycategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery_category = GalleryCategory::find($id);
        $gallery_category->delete();
        return redirect()->back();
    }
}
