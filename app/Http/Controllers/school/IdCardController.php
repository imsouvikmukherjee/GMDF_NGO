<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IdCardController extends Controller
{
    public function idcardDisplay(){
        $title = "Student | ID Card";
        // $id = decrypt($id);

        $studentprofiledata = DB::table('studentdetails')
        ->join('users','studentdetails.student_id','=','users.id')
        ->join('schoolsection','studentdetails.section','=','schoolsection.id')
        ->select('studentdetails.*','users.schoolname','users.name','users.contact', 'schoolsection.section')
        ->where('users.schoolname',Session::get('schoolname'))
        ->where('users.name',Session::get('name'))
        ->where('users.contact',Session::get('contact'))
        ->get();

        return view('school.idcard', ['studentprofiledata' => $studentprofiledata])->with('title',$title);
    }
}
