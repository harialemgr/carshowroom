<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::orderBy('id','desc')->get();
        return view('admin.slider.view', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


           $message= [
            'title.required'=>'page title is required.',
            'image.required'=>'image is required.',
           
           
        ];

        $validateData = $request->validate([
            
            'title' => 'required',
            'image'=>'required',
           
        ], $message);


         if($request->publish == null){
            $publication = 0;
        } else
        {
            $publication = 1;
        }

       if($request->hasFile('image')){

           $image = $request->file('image');
           $paths = 'images/slide/';
           $fileNameToStore = CommonController::save_image($image, $paths);

        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        

            $slider = new slider();
            $slider->title = $request->title;
            $slider->image = $fileNameToStore;
            $slider->publish = $publication;
            $slider->save();
        
 
//            $action = 'uploaded';
//             $data = 'images for slider';
//            $activity = activityController::postUser($action,$data);
//
           
           return redirect(route('slide.index'));


        
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
//        $slider = slider::find($id);
//        return view('admin-pages.slider.edit', compact('slider'));

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

//      if($request->publish == null){
//            $publication = 0;
//        } else
//        {
//            $publication = 1;
//        }
//
//
//         if($request->hasFile('image'))
//        {
//            $image = $request->file('image');
//            $paths = 'images/sliders/images/';
//            $fileNameToStore = CommonController::save_image($image, $paths);
//        }
//        else
//        {
//            $fileNameToStore = 'noimage.jpg';
//        }
//
//        $data = $id;
//        $action = 'updated slide number';
//
//
//
//        $slider = slider::find($id);
//        $slider->title = $request->title;
//        $slider->description = $request->description;
//        $slider->image = $fileNameToStore;
//        $slider->link = $request->link;
//        $slider->publish = $publication;
//        $slider->save();
//        $activity = activityController::postUser($action,$data);
//        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $action = 'deleted slide number';
//        $data = $id;
        $slider = slider::find($id);
        $slider->delete();
//        $activity = activityController::postUser($action,$data);
        return redirect()->back();
    }
}
