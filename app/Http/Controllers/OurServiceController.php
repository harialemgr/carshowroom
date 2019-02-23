<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OurServiceRequest;
use PHPUnit\Framework\MockObject\Stub\Exception;
use App\OurService;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = OurService::all();
        return view('admin.service.view')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OurServiceRequest $request)
    {
        try {
            $service = new OurService();
            $service->title = $request->title;
            $service->description = $request->description;
            if ($service->save()) {
                return redirect()->route('ourservice.index')->with('successMsg', 'Service added successfully !');
            } else {
                return redirect()->route('ourservice.index')->with('failedMsg', 'Failed to add !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
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
        $service = OurService::find($id);
        return view('admin.service.edit')->with(compact('service'));
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
            $service = OurService::find($id);
            $service->title = $request->title;
            $service->description = $request->description;
            if ($service->save()) {
                return redirect()->route('ourservice.index')->with('successMsg', 'Service updated successfully !');
            } else {
                return redirect()->route('ourservice.index')->with('failedMsg', 'Failed to update !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
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
            $service = OurService::find($id);
            if ($service->delete()) {
                return redirect()->route('ourservice.index')->with('successMsg', 'Service deleted successfully !');
            } else {
                return redirect()->route('ourservice.index')->with('failedMsg', 'Failed to delete !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }
}
