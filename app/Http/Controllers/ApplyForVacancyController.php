<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplyForVacancyRequest;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Stub\Exception;

class ApplyForVacancyController extends Controller
{
    public function index()
    {
        $applied_for_vacancies = DB::table('applied_for_vacancies')->get();
        return view('admin.applied_for_vacancies.view')->with(compact('applied_for_vacancies'));
    }


    public function store(ApplyForVacancyRequest $request)
    {
        try {
            $curriculum_vitae = $request->file('curriculum_vitae');
            $curriculum_vitae_name = time() . $curriculum_vitae->getClientOriginalName();
            $curriculum_vitae->move('files/curriculum_vitae', $curriculum_vitae_name);
            $apply = DB::table('applied_for_vacancies')->insert([
                'name' => $request->name,
                'address' => $request->address,
                'contact' => $request->contact,
                'curriculum_vitae' => $curriculum_vitae_name,
                'applied_post' => $request->applied_post ,
            ]);
            if ($apply) {
                return redirect()->back()->with('successMsg', 'Applied Successfully !');
            } else {
                return redirect()->back()->with('failedMsg', 'Failed to apply !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }

    public function downloadCurriculumVitae($filename)
    {
        return response()->download(public_path('files/curriculum_vitae/'. $filename));
    }

    public function destroy($id)
    {
        try {
            if (DB::table('applied_for_vacancies')->whereId($id)->delete()) {
                return redirect()->back()->with('successMsg', 'Deleted Successfilly');
            } else {
                return redirect()->back()->with('failedMsg', 'Failed to delete !');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('warningMsg', $e->getMessage());
        }
    }
}
