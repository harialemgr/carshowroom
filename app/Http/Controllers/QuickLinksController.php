<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuickLink;

class QuickLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quicklinks = QuickLink::all();
        return view('admin.quicklinks.view', compact('quicklinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quicklinks.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = new QuickLink();
        $link->title = $request->title;
        $link->link = $request->link;
        $link->save();
        return redirect(route('quicklinks.index'));
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
        $link = QuickLink::find($id);
        return view('admin.quicklinks.edit',compact('link'));
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
        $link = QuickLink::find($id);
        $link->title = $request->title;
        $link->link= $request->link;
        $link->save();
        return redirect(route('quicklinks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = QuickLink::find($id);
        $link->delete();
        return redirect(route('quicklinks.index'));
    }
}
