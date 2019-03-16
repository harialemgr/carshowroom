<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Wallpaper;
class WallpaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallpapers = Wallpaper::all();
        return view('admin.adminprofile.wallpaper.index')->with('wallpapers',$wallpapers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminprofile.wallpaper.add');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            
        ]);     
       if($request->hasFile('image')){ 

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
        // get just file name
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        // get just extension
        $extension = $request->file('image')->getClientOriginalExtension();
        // file name to store
        $fileNameToStore =$filename.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/wallpaper',$fileNameToStore);
        
     }
        $wallpaper = new Wallpaper();  
        $wallpaper->name = $request->name;
        if($request->hasFile('image'))
       {
           $wallpaper->image = $fileNameToStore;
        }
     if($wallpaper->save()){
        
        return redirect(route('wallpaper.index'))->with('successMsg','Saved !!!');
     }
     else{
        return redirect()->back()->with('failedMsg','Failed !!!');
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
        $wallpaper = Wallpaper::findOrFail($id);
        return view('admin.adminprofile.wallpaper.edit')->with('wallpaper',$wallpaper);
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

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
        // get just file name
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        // get just extension
        $extension = $request->file('image')->getClientOriginalExtension();
        // file name to store
        $fileNameToStore =$filename.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/wallpaper',$fileNameToStore);
        
     }
        $wallpaper = Wallpaper::find($id); 
        $wallpaper->name = $request->name;
        if($request->hasFile('image'))
       {
           $wallpaper->image = $fileNameToStore;
        }
     if($wallpaper->save()){
        
        return redirect()->back()->with('successMsg','Updated !!!');
     }
     else{
        return redirect()->back()->with('failedMsg','Failed !!!');
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
        $wallpaper = Wallpaper::findOrFail($id);
        Storage::delete('storage/wallpaper'.$wallpaper->image);
        $wallpaper->delete();
        return redirect()->back()->with('successMsg','Deleted !!!');
    }
}
