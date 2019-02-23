<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\blog_category;
use App\page_category;
use PHPUnit\Framework\Exception;

class blogController extends Controller
{
    public function getCategoryId()
    {
        $category_id = page_category::whereName('Support')->pluck('id')->first();
        return $category_id;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $categories = blog_category::with('blog')->get();
        $blogs = blog::All();
        return view('admin.blogs.view', compact('blogs'));
    }

//    public function category($id)
//    {
//        $category = blog_category::find($id)->title;
//        $categories = blog_category::with('blog')->get();
//        $blogs = blog_category::find($id)->blog;
//        return view('admin-blogs.blogs.categoryView', compact('categories', 'blogs', 'category'));
//
//
//    }


    public function getSingle($slug)
    {
        $blog = blog::where('slug', '=', $slug)->first();
        return view('admin-blogs.blogs.slug', compact('blog'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $blog_categories = blog_category::all();
        return view('admin.blogs.add');
        //  $category = blog::find(1)->blog_category;
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
        try {
            if ($request->status == 1) {
                $status = 1;
            } else {
                $status = 0;
            }
            $imagearray = [];
            if ($request->hasFile('image')) {
                foreach ($request->image as $image) {
                    $paths = 'images/blog/';
                    $fileNameToStore = CommonController::save_image($image, $paths);
                    $imagearray[] = $fileNameToStore;
                }
            } else {
                $fileNameToStore = 'noimage.jpg';
                $imagearray[] = $fileNameToStore;
            }
            $blog = new blog();
            $blog->title = $request->name;
            $blog->summary = $request->editor1;
            $blog->image = serialize($imagearray);
            $blog->publish = $status;
            if ($blog->save() == true) {
                return redirect()->route('blog.index')->with('successMsg', 'Blog Added Successfully !');
            } else {
                return redirect()->route('blog.index')->with('warningMsg', 'Failed to add');
            }
        } catch (Exception $e) {
            return redirect()->route('blog.index')->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $category_id = $this->getCategoryId();
        // // $blogDetails = blog::whereSlug($slug)->get()->first();
        // $blogDetails = blog::find($id);
        // // dd($blogDetails);
        // return view('frontend.blogview')->with(compact('category_id', 'blogDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $blog_categories = blog_category::all();
        $blog = blog::find($id);
        $blog->images = unserialize($blog->image);
        return view('admin.blogs.edit', compact('blog'));
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
        try {
            if ($request->status == 1) {
                $status = 1;
            } else {
                $status=0;
            }
            $imagearray=[];
            if ($request->hasFile('image')) {
                foreach ($request->image as $image) {
                    $paths = 'images/blog/';
                    $fileNameToStore = CommonController::save_image($image, $paths);
                    $imagearray[] = $fileNameToStore;
                }
                $abc=array_merge($imagearray, $request->updateimage);
            } else {
                $abc =$request->updateimage;
            }
            if ($abc == null) {
                $abc = array('noimage.jpg');
            }
            $blog = blog::find($id);
            $blog->title = $request->name;
            $blog->summary = $request->editor1;
            $blog->image = serialize($abc);
            $blog->publish=$status;
            if ($blog->save() == true) {
                return redirect()->route('blog.index')->with('successMsg', 'Blog Updated Successfully !');
            } else {
                return redirect()->route('blog.index')->with('warningMsg', 'Failed to update !');
            }
        } catch (Exception $e) {
            return redirect()->route('blog.index')->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $blog = blog::find($id);
            if ($blog->delete() == true) {
                return redirect()->route('blog.index')->with('successMsg', 'Blog Deleted Successfully !');
            } else {
                return redirect()->route('blog.index')->with('warningMsg', 'Failed to delete !');
            }
        } catch (Exception $e) {
            return redirect()->route('blog.index')->with('warningMsg', $e->getMessage());
        }
    }
}
