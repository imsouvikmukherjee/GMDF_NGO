<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NGOSchoolConntroller extends Controller
{
    public function NGOSchool(){
        $title = "NGO | School";
        return view('admin.school')->with('title',$title);
    }

    public function addSchoolCredential(){
        $title = "NGO | Add School Credential";
        return view('admin.add-school-credential')->with('title',$title);
    }

    public function schoolDetailsView(){
        $title = "NGO | School Details View";
        return view('admin.school-details-view')->with('title',$title);
    }
}
