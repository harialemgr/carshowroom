<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Car;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('created_at','desc')->get();
        // dd($cars);
        return view('admin.car.view')->with('cars',$cars);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'-'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/car/',$fileNameToStore);
        }

        $cars = new Car();
        $cars->name = $request->name;
        $cars->description = $request->description;
        if($request->hasFile('image')){
        $cars->image= $fileNameToStore;
        }
        else{
            $cars->image = 'noimage.jpg';
        }
        if( $cars->save()){
           return redirect()->back()->with('successMsg','File Saved!!');
        }
        else{
          return  redirect()->back()->with('errorMsg','File Not Saved!!');
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
        $cars = Car::find($id);
        return view('admin.car.edit',compact('cars'));
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
        // if($request->hasFile('image')){
        //     $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //     $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $fileNameToStore = $fileName.'-'.time().'.'.$extension;
        //     $path = $request->file('image')->storeAs('public/car/',$fileNameToStore);
        // }

        $cars = Car::find($id);
        $cars->name = $request->name;
        $cars->description = $request->description;
        // if($request->hasFile('image')){
        // $cars->image= $fileNameToStore;
        // }
        // else{
        //     $cars->image = 'noimage.jpg';
        // }
        if( $cars->save()){
           return redirect()->back()->with('successMsg','File Updated!!');
        }
        else{
          return  redirect()->back()->with('errorMsg','File Not Not!!');
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
        $car = Car::find($id);
        Storage::delete('/public/car/'.$car->image);
           $car->delete();
           return redirect(route('car.index'));
                
    }
  
}
