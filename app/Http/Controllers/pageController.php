<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
use App\page_category;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $categories = page_category::with('page')->get();
        $pages = page::All();
        return view('admin.pages.view', compact('pages'));
    }

//    public function category($id)
//    {
//        $category = page_category::find($id)->title;
//        $categories = page_category::with('page')->get();
//        $pages = page_category::find($id)->page;
//        return view('admin-pages.pages.categoryView', compact('categories', 'pages', 'category'));
//
//
//    }


    public function getSingle($slug)
 {
    $page = page::where('slug', '=', $slug)->first();
    return view('admin-pages.pages.slug', compact('page'));
 }   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $page_categories = page_category::all();
        return view('admin.pages.add', compact('page_categories'));
        //  $category = page::find(1)->page_category;
        // return $category;
    }

    /**
     * 
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

                $paths = 'images/page/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $imagearray[] = $fileNameToStore;
            }

        } else {
            $fileNameToStore = 'noimage.jpg';
            $imagearray[] =$fileNameToStore;
        }
        $page = new page();
        $page->title = $request->name;
        $page->summary = $request->editor1;
        $page->page_category_id = $request->category;
        $page->image = serialize($imagearray);
        $page->publish=$status;

        $page->save();

        return redirect()->route('page.index');

//        $action = 'created page';
//        $data = $page->title;
//        $activity = activityController::postUser($action,$data);


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
        $page_categories = page_category::all();
        $page = page::find($id);
        $page->images = unserialize($page->image);
        return view('admin.pages.edit', compact('page', 'page_categories'));
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

                $paths = 'images/page/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $imagearray[] = $fileNameToStore;

            }
            $abc=array_merge($imagearray,$request->updateimage);



        } else {


            $abc =$request->updateimage;

        }

        if($abc == null){
            $abc = Array('noimage.jpg');
        }



        $page = page::find($id);
        $page->title = $request->name;
        $page->summary = $request->editor1;
        $page->page_category_id = $request->category;
        $page->image = serialize($abc);
        $page->publish=$status;

        $page->save();

        return redirect()->route('page.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = page::find($id);
        // $action = 'deleted page';
        // $data = $page->title;
       
        $page->delete();
        // $activity = activityController::postUser($action,$data);
        return redirect()->back();
    }
}
