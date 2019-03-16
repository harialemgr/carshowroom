<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterSetting;
class FooterSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminprofile.bottom.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $footer = new FooterSetting();
        $footer->address = $request->address; 
        $footer->phno = $request->phno; 
        $footer->googlemap = $request->googlemap; 
        $footer->facebook = $request->facebook; 
        $footer->instagram = $request->instagram; 
        $footer->gmail = $request->gmail; 
        $footer->twitter = $request->twitter; 
        $footer->linkin = $request->linkin;
        if($footer->save()){
            return redirect()->back()->with('successMsg','Saved!!!');
        }
        else{
            return redirect()->back()->with('failedMsg','Failed!!!');
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
        $footer = FooterSetting::findOrFail($id);
        return view('admin.adminprofile.bottom.edit')->with('footer',$footer);
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
        
        $footer = FooterSetting::findOrFail($id);
        $footer->address = $request->address; 
        $footer->phno = $request->phno; 
        $footer->googlemap = $request->googlemap; 
        $footer->facebook = $request->facebook; 
        $footer->instagram = $request->instagram; 
        $footer->gmail = $request->gmail; 
        $footer->twitter = $request->twitter; 
        $footer->linkin = $request->linkin;
        if($footer->save()){
            return redirect()->back()->with('successMsg','Update!!!');
        }
        else{
            return redirect()->back()->with('failedMsg','Failed!!!');
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
        //
    }
}
