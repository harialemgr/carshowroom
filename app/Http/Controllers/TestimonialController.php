<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestimonailRequest;
use Mockery\Exception;
use App\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.view')->with(compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonailRequest $request)
    {
        try {
            $testimonial = new Testimonial();
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            if ($testimonial->save()) {
                return redirect()->back()->with('successMsg', 'Testimonial Added Successfully');
            } else {
                return redirect()->back()->with('failedMsg', 'Failed to add !');
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
        $testimonail = Testimonial::find($id);
        return view('admin.testimonials.edit')->with(compact('testimonail'));
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
        // dd($request->all());
        try {
            $testimonial = Testimonial::find($id);
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            if ($testimonial->save()) {
                return redirect()->back()->with('successMsg', 'Testimonial Updated Successfully');
            } else {
                return redirect()->back()->with('failedMsg', 'Failed to update !');
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
            $testimonial = Testimonial::find($id);
            if ($testimonial->delete()) {
                return redirect()->back()->with('successMsg', 'Testimonial Deleted Successfully');
            } else {
                return redirect()->back()->with('failedMsg', 'Failed to delete !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }
}
