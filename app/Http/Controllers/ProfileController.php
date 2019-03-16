<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\AdminProfile;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view('admin.adminprofile.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminprofile.add');
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
            'status'=>'max:40',
            'phno'=>'max:15',
            
        ]);

       

        
       if($request->hasFile('logo')){ 

            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
        // get just file name
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        // get just extension
        $extension = $request->file('logo')->getClientOriginalExtension();
        // file name to store
        $fileNameToStore =$filename.'_'.time().'.'.$extension;
        $path = $request->file('logo')->storeAs('public/logo',$fileNameToStore);
        
     }
     else
     {
         $fileNameToStore = 'noimage.png';
     }


        $profile = new AdminProfile();
        
        
        $profile->status = $request->status;
        $profile->phno = $request->phno;


        $profile->logo = $fileNameToStore;
     if($profile->save()){
        
        return redirect()->back()->with('successMsg','Save Successfully');
     }
     else{
         
        return redirect()->back()->with('failedMsg','Failed');
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
        $adminprofile = AdminProfile::find($id);
        return view('admin.adminprofile.edit',compact('adminprofile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { 
        
        $profile = AdminProfile::find($id);
        if(isset($_GET['topwallpaper'])){
            $profile->topwallpaper = $_GET['topwallpaper'];
            // dd($profile);
            if($profile->save()){
        
                return redirect()->back()->with('successMsg','Updated Successfully');
             }
             else{
                 
                return redirect()->back()->with('failedMsg','Failed to Update');
             }
            
        }else if(isset($_GET['bottomwallpaper'])){
            $profile->bottomwallpaper = $_GET['bottomwallpaper'];
            // dd($profile);
            if($profile->save()){
        
                return redirect()->back()->with('successMsg','Updated Successfully');
             }
             else{
                 
                return redirect()->back()->with('failedMsg','Failed to Update');
             }
        }
        else{
      
        if($request->hasFile('logo')){ 

            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
        // get just file name
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        // get just extension
        $extension = $request->file('logo')->getClientOriginalExtension();
        // file name to store
        $fileNameToStore =$filename.'_'.time().'.'.$extension;
        $path = $request->file('logo')->storeAs('public/logo',$fileNameToStore);
        
     }
     else
     {
         $fileNameToStore = 'noimage.png';
     }

     if($request->hasFile('popup')){

        $fileNameWithExt1 = $request ->file('popup')->getClientOriginalName();
        $filename1 = pathinfo($fileNameWithExt1,PATHINFO_FILENAME);
        
        $extension1 = $request->file('popup')->getClientOriginalName();
        $fileNameToStore1 = $filename1.'_'.time().'.'.$extension1;
        $path =$request->file('popup')->storeAs('public/logo',$fileNameToStore1);
     }else{
         $fileNameToStore1 = 'noimage.png';
     }
        $profile->status = $request->status;
        $profile->phno = $request->phno;
        if($request->hasFile('logo')){
        $profile->logo = $fileNameToStore;
        }
      
        if($request->hasFile('popup')){
            $profile->popup = $fileNameToStore1;
        }
        if($profile->save()){
        
            return redirect()->back()->with('successMsg','Updated Successfully');
         }
         else{
             
            return redirect()->back()->with('failedMsg','Failed to Update');
         }
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
        $adminprofile = AdminProfile::find($id);
         Storage::delete('/public/logo/'.$adminprofile->logo);
            $adminprofile->delete();
            return redirect(route('adminprofile.index'));
                 
    }
}
