<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ResultController extends Controller
{
    public function schoolResult()
    {
        $title = "School | Result";

        $resultlist = DB::table('schoolresult')
            ->join('users', 'schoolresult.student', '=', 'users.id')
            ->select('schoolresult.id AS id', 'schoolresult.*', 'users.schoolname', 'users.name', 'users.contact')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('id', 'desc')->paginate(5);

        return view('admin.school-result', ['resultlist' => $resultlist])->with('title', $title);
    }

    public function addResult()
    {
        $title = "School | Add Result";

        $schoollist = DB::table('users')
            ->select('id', 'schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
            ->where('status', 1)->where('usertype', 'school')->where('schoolname', session('schoolname'))
            ->get();

        $classdata = DB::table('schoolclass')
            ->join('users', 'schoolclass.user_id', '=', 'users.id')
            ->select('schoolclass.id AS id', 'schoolclass.*', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolclass.id', 'desc')->get();

        $sectiondata = DB::table('schoolsection')
            ->join('schoolclass', 'schoolsection.class', '=', 'schoolclass.id')
            ->join('users', 'schoolclass.user_id', '=', 'users.id')
            ->select('schoolsection.id AS sectionid', 'schoolsection.*', 'schoolclass.class', 'users.id', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolsection.id', 'desc')->get();

        $studentlist = DB::table('users')->where('usertype', 'Student')->where('schoolname', session('schoolname'))->orderBy('id', 'desc')->get();


        return view('admin.add-result', ['schoollist' => $schoollist, 'classdata' => $classdata, 'sectiondata' => $sectiondata, 'studentlist' => $studentlist])->with('title', $title)->with('title', $title);
    }

    public function addResultStore(Request $request)
    {
        $validate = $request->validate([
            'school' => 'required',
            'class' => 'required',
            'section' => 'required',
            'student' => 'required',
            'resultdocument' => 'required|file|mimes:pdf|max:2048'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $resultdocument = 'resultdocument' . time() . '.' . $request->resultdocument->extension();
        $request->resultdocument->move(public_path('otherstoredfiles'), $resultdocument);


        DB::table('schoolresult')->insert([
            'school' => $validate['school'],
            'class' => $validate['class'],
            'section' => $validate['section'],
            'student' => $validate['student'],
            'resultdocument' => $resultdocument,
            'created_at' => $currentDate
        ]);

        return redirect()->route('school.result')->with('success', 'Result added successfully!');
    }


    public function resultDelete($id)
    {
        $id = decrypt($id);

        if ($id > 0) {
            $resultdocument = DB::table('schoolresult')->where('id', $id)->value('resultdocument');
            File::delete(public_path('otherstoredfiles') . '/' . $resultdocument);
        }

        DB::table('schoolresult')->where('id', $id)->delete();
        return redirect()->route('school.result')->with('success', 'Record deleted successfully!');
    }
}
