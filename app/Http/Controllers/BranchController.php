<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('admin.branch.view')->with(compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchRequest $request)
    {
        try {
            // count if there a head branch already exists
            if ($request->branch_type == 'head') {
                $count = count(Branch::whereBranchType('head')->get()->toArray());
                if ($count != 0) {
                    return redirect()->back()->with('duplicateBranch', 'Head Branch Already Exists !');
                }
            }
            $branch = new Branch();
            $branch->name = $request->name;
            $branch->address = $request->address;
            $branch->email = $request->email;
            $branch->contact = $request->contact;
            $branch->branch_type = $request->branch_type;
            $branch->save();
            return redirect()->route('branch.index')->with('successMsg', 'Branch Added Successfully !');
        } catch (Exception $e) {
            return redirect()->route('branch.index')->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('admin.branch.edit')->with(compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        try {
            if ($request->branch_type == 'head') {
                $count = count(Branch::whereBranchType('head')->get()->toArray());
                if ($count != 0) {
                    return redirect()->back()->with('duplicateBranch', 'Head Branch Already Exists !');
                }
            }

            $branch->name = $request->name;
            $branch->address = $request->address;
            $branch->email = $request->email;
            $branch->contact = $request->contact;
            $branch->branch_type = $request->branch_type;
            $branch->save();
            return redirect()->route('branch.index')->with('successMsg', 'Branch Updated Successfully !');
        } catch (Exception $e) {
            return redirect()->route('branch.index')->with('warningMsg', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        try {
            $branch->delete();
            return redirect()->route('branch.index')->with('successMsg', 'Branch Removed Successfully !');
        } catch (Exception $e) {
            return redirect()->route('branch.index')->with('warningMsg', $e->getMessage());
        }
    }
}
