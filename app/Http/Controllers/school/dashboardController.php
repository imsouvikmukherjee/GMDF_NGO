<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class dashboardController extends Controller
{
    public function schoolDashboard()
    {
        $title = "Student | Dashboard";

        $schoolnotice = DB::table('schoolnotice')
            ->join('users', 'schoolnotice.schoolid', '=', 'users.id')
            ->select('schoolnotice.*', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolnotice.id', 'desc')->get();


        $schooldetails = DB::table('schooldetails')
            ->join('users', 'schooldetails.school_name', '=', 'users.id')
            ->select('schooldetails.id', 'schooldetails.*', 'users.name', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->first();

        $socialicones = DB::table('schoolsetting')
            ->join('users', 'schoolsetting.school', '=', 'users.id')
            ->select('schoolsetting.*', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))->first();

        return view('school.schoolhome', ['schoolnotice' => $schoolnotice, 'schooldetails' => $schooldetails, 'socialicones' => $socialicones])->with('title', $title);
    }
}
