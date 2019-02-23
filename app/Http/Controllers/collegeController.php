<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\college;

class collegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $college = college::first();
        return view('admin.profile.view', compact('college'));
    }

    /**
     * Show the form for creating a new
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $college = college::find($id);
        return view('admin.profile.edit', compact('college'));
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
        if($request->hasFile('image')){

            $image = $request->file('image');
            $paths = 'images/profile/';
            $fileNameToStore = CommonController::save_image($image, $paths);

        }
        else
        {
            $fileNameToStore = $request->image;
        }

           
         $college = college::find($id);
         $college->name = $request->name;
         $college->address = $request->address;
         $college->contact = $request->contact;
         $college->mobile = $request->mobile;
         $college->email = $request->email;
         $college->image = $fileNameToStore;
         $college->facebook = $request->facebook;
         $college->twitter = $request->twitter;
         $college->save();

         return redirect(route('college.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
