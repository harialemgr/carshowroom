<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use Maatwebsite\Excel\Facades\Excel;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();
        foreach ($careers as $career) {
            $career->images = unserialize($career->image);
        }
        return view('admin.career.view', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $imagearray = [];
            if ($request->hasFile('image')) {
                foreach ($request->image as $image) {
                    $paths = 'images/career/';
                    $fileNameToStore = CommonController::save_image($image, $paths);
                    $imagearray[] = $fileNameToStore;
                }
            } else {
                $fileNameToStore = 'noimage.jpg';
                $imagearray[] = $fileNameToStore;
            }
            $career = new Career();
            $career->title = $request->name;
            $career->description = $request->editor1;
            $career->image = serialize($imagearray);
            //$career->publish=$status;
            if ($career->save()) {
                return redirect()->route('career.index')->with('successMsg', 'Vacancy Added Successfully !');
            } else {
                return redirect()->route('career.index')->with('warningMsg', 'Failed to add !');
            }
            return redirect()->route('career.index');
        } catch (Exception $e) {
            return redirect()->route('career.index')->with('warningMsg', $e->getMessage());
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
        $career = Career::find($id);
        $career->images= unserialize($career->image);
        return view('admin.career.edit', compact('career'));
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
            $imagearray=[];
            if ($request->hasFile('image')) {
                foreach ($request->image as $image) {
                    $paths = 'images/career/';
                    $fileNameToStore = CommonController::save_image($image, $paths);
                    $imagearray[] = $fileNameToStore;
                }
                //$abc=array_merge($imagearray,$request->updateimage);
                $abc = $imagearray;
            } else {
                $abc =$request->updateimage;
            }
            if ($abc == null) {
                $abc = array('noimage.jpg');
            }
            $career = Career::find($id);
            $career->title = $request->name;
            $career->description = $request->editor1;
            $career->image = serialize($abc);
            // $career->publish=$status;
            if ($career->save()) {
                return redirect()->route('career.index')->with('successMsg', 'Vacancy Updated Successfully !');
            } else {
                return redirect()->route('career.index')->with('warningMsg', 'Failed to update !');
            }
            return redirect()->route('career.index');
        } catch (Exception $e) {
            return redirect()->route('career.index')->with('warningMsg', $e->getMessage());
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
        $career = Career::find($id);
        $career->delete();
        return redirect()->back();
    }
}
