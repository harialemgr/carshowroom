<?php

namespace App\Http\Controllers;

use App\Pricing;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\Exception;
use App\Http\Requests\PricingRequest;
use App\page_category;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings = Pricing::all();
        return view('admin.pricing.view')->with(compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pricing.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PricingRequest $request)
    {
        try {
            $pricing = new Pricing();
            $pricing->speed = $request->speed;
            $pricing->unit = $request->unit;
            $pricing->price = $request->price;
            $pricing->plan_type = $request->plan_type;
            $pricing->traffic = $request->traffic;
            $pricing->display = $request->display;
            if ($pricing->save()) {
                return redirect()->back()->with('successMsg', 'Pricing Successfully Added !');
            } else {
                return redirect()->back()->with('errorMsg', 'Failed to add');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        return view('admin.pricing.edit')->with(compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(PricingRequest $request, Pricing $pricing)
    {
        try {
            $pricing->speed = $request->speed;
            $pricing->unit = $request->unit;
            $pricing->price = $request->price;
            $pricing->plan_type = $request->plan_type;
            $pricing->traffic = $request->traffic;
            $pricing->display = $request->display;
            if ($pricing->save()) {
                return redirect()->back()->with('successMsg', 'Pricing Updated Successfully !');
            } else {
                return redirect()->back()->with('errorMsg', 'Pricing update failed');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        try {
            if ($pricing->delete()) {
                return redirect()->back()->with('successMsg', 'Pricing Deleted Successfully !');
            } else {
                return redirect()->back()->with('errorMsg', 'Pricing delete failed');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }

        public function getCategoryId()
    {
        $category_id = page_category::whereName('Support')->pluck('id')->first();
        return $category_id;
    }

}
