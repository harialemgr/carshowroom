<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = messages::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.messages.view', compact('messages'));
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
       $this->validate($request, [
            'name' => 'required',
            'email'=>  'required',
             'contact' => 'required',
             'message' => 'required',
        ], $message);
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'name.required' => 'name is required',
            'email.required' =>'email is required',
            'contact.required'=>'contact is required',
            'message.required'=> 'message is requied',
         ];

        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required',
            'contact' => 'required',
            'message' => 'required',
        ], $message);

        $message = new messages;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->contact = $request->contact;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('msg', 'Message has been successfully sent.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = messages::find($id);
        return view('admin-pages.messages.view', compact('message'));
    }


     
    public function destroy($id)
    {
        $message = messages::where('id', $id);
        $message->delete();
        return redirect()->back();
    }
}
