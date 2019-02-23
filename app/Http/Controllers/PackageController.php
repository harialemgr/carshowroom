<?php

namespace App\Http\Controllers;

use App\Package;
use App\Pcategory;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        foreach ($packages as $package){
            $pcategory = Pcategory::find($package->pcategory_id);
            $package->category = $pcategory->name;
        }
        return view('admin.package.view',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcategory = Pcategory::all();

        return view('admin.package.add',compact('pcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $imagearray=[];
        if ( $request->hasFile('image')) {
        foreach ($request->image as $image) {

                $paths = 'images/package/';
                $fileNameToStore = CommonController::save_image($image, $paths);
                $imagearray[] = $fileNameToStore;
        }

        } else {
            $fileNameToStore = 'noimage.jpg';
            $imagearray[] =$fileNameToStore;
        }
        $package = new Package();
        $package->name = $request->name;
        $package->type = $request->type;
        $package->pcategory_id = $request->category;
        $package->duration = $request->duration;
        $package->amount = $request->amount;
        $package->group_size = $request->group_size;
        $package->details = $request->editor1;
        $package->image = serialize($imagearray);

        $package->save();

        return redirect()->route('package.index');


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
        $pcategory = Pcategory::all();

       $package = Package::find($id);
       $package->images = unserialize($package->image);



       return view('admin.package.edit',compact('package','pcategory'));
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






        $imagearray=[];
        if ( $request->hasFile('image')) {
            foreach ($request->image as $image) {

                $paths = 'images/package/';
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



        $package = Package::find($id);
        $package->name = $request->name;
        $package->type = $request->type;
        $package->pcategory_id = $request->category;
        $package->duration = $request->duration;
        $package->amount = $request->amount;
        $package->group_size = $request->group_size;
        $package->details = $request->editor1;
        $package->image = serialize($abc);

        $package->save();

        return redirect()->route('package.index');


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
