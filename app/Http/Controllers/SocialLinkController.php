<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Stub\Exception;
use App\SocialLink;

class SocialLinkController extends Controller
{
    public function index()
    {
        $links = DB::table('social_links')->whereId('1')->get()->first();
        return view('admin.social_link.index')->with(compact('links'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        try {
            // $update = DB::table('social_links')->whereId($id)->update([
            //     'facebook' => $request->facebook,
            //     'google_plus' => $request->google_plus,
            //     'twitter' => $request->twitter,
            //     'linkedin' => $request->linkedin,
            //     'instagram' => $request->instagram
            // ]);
            $links = SocialLink::find($id);
            $links->facebook = $request->facebook;
            $links->google_plus = $request->google_plus;
            $links->twitter = $request->twitter;
            $links->linkedin = $request->linkedin;
            $links->instagram = $request->instagram;
            // dd($links->save());
            if ($links->save()) {
                return redirect()->back()->with('successMsg', 'Updated Successfully !');
            } else {
                return redirect()->back()->with('failedMsg', 'Update Failed !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }
}
