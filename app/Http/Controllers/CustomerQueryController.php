<?php

namespace App\Http\Controllers;

use App\CustomerQuery;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerQueryRequest;
use PHPUnit\Framework\MockObject\Stub\Exception;

class CustomerQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = CustomerQuery::all();
        $messages = $messages->reverse();
        return view('admin.messages.view')->with(compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerQueryRequest $request)
    {
        // dd($request->all());
        try {
            $queryOrFeedback = new CustomerQuery();
            $queryOrFeedback->name = $request->name;
            $queryOrFeedback->email = $request->email;
            $queryOrFeedback->phone = $request->phone;
            $queryOrFeedback->message = $request->message;
            $queryOrFeedback->save();
            return redirect()->back()->with('successMsg', 'Thanks for your feedback !');
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerQuery  $customerQuery
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerQuery $customerQuery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerQuery  $customerQuery
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerQuery $customerQuery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerQuery  $customerQuery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerQuery $customerQuery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerQuery  $customerQuery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $customerQuery = CustomerQuery::find($id);
            if ($customerQuery->delete()) {
                return redirect()->back()->with('successMsg', 'Message Deleted Successfully !');
            }
            return redirect()->back()->with('failedMsg', 'Failed to delete !');
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }
}
