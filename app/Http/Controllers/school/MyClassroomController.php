<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class MyClassroomController extends Controller
{
    public function showMyclassroom()
    {
        $title = "Student | Myclassroom";

        $subjects = DB::table('schoolsubjects')
            ->join('users', 'schoolsubjects.school', '=', 'users.id')
            ->select('schoolsubjects.*', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolsubjects.subject', 'asc')
            ->get();



        return view('school.student-home', ['subjects' => $subjects])->with('title', $title);
    }

    public function viewnotes($id)
    {
        $id = decrypt($id);
        $title = "Student | Notes";

        // $subject_teacher = DB::table('notes')
        // ->join('schoolsubjects','notes.subject','=','schoolsubjects.id')
        // ->join('users','schoolsubjects.teacher','=','users.id')
        // ->select('notes.*','users.name')
        // ->where('notes.id',$id)->first();

        $notes = DB::table('notes')
            ->join('schoolsubjects', 'notes.subject', '=', 'schoolsubjects.id')
            ->join('users', 'schoolsubjects.school', '=', 'users.id')
            ->join('schoolclass', 'notes.class', '=', 'schoolclass.id')
            ->select('notes.*', 'schoolsubjects.subject', 'schoolclass.class', 'users.schoolname',  DB::raw("DATE_FORMAT(notes.created_at, '%Y-%m-%d') AS created_at"))
            ->where('users.schoolname', Session::get('schoolname'))
            ->where('schoolsubjects.id', $id)
            ->orderBy('notes.id', 'desc')->get();

        return view('school.student-view-notes', ['notes' => $notes])->with('title', $title);
    }

    public function viewNotesVideo($id)
    {
        $id = decrypt($id);
        $title = "Student | Notes Video";
        $notevideo = DB::table('notes')->select('notes_video')->where('id', $id)->first();
        return view('school.student-view-notes-video', ['notevideo' => $notevideo])->with('title', $title);
    }

    public function studentProfile()
    {
        $title = "Student | Profile";

        // $studentprofiledata = DB::table('studentdetails')
        // ->join('users','studentdetails.student_id','=','users.id')
        // ->join('schoolsection','studentdetails.section','=','users.id')
        // ->select('studentdetails.*','users.schoolname','users.name','users.contact')
        // ->where('users.schoolname',Session::get('schoolname'))
        // // ->where('users.name',Session::get('name'))
        // // ->where('users.contact',Session::get('contact'))
        // ->get();

        $studentprofiledata = DB::table('studentdetails')
        ->join('users','studentdetails.student_id','=','users.id')
        ->join('schoolsection','studentdetails.section','=','schoolsection.id')
        ->select('studentdetails.*','users.schoolname','users.name','users.contact', 'schoolsection.section')
        ->where('users.schoolname',Session::get('schoolname'))
        ->where('users.name',Session::get('name'))
        ->where('users.contact',Session::get('contact'))
        ->get();

        // dd($studentprofiledata);
        

        return view('school.student-details', ['studentprofiledata' => $studentprofiledata])->with('title', $title);
    }

    public function studentResult()
    {
        $title = "Student | Result";

        $result = DB::table('schoolresult')
            ->join('schoolclass', 'schoolresult.class', '=', 'schoolclass.id')
            ->join('schoolsection', 'schoolresult.section', '=', 'schoolsection.id')
            ->join('users', 'schoolresult.student', '=', 'users.id')
            ->select('schoolresult.*', 'schoolclass.class', 'schoolsection.section', 'users.name', 'users.schoolname', 'users.contact')
            ->where('users.schoolname', Session::get('schoolname'))
            ->where('users.name', Session::get('name'))
            ->where('users.contact', Session::get('contact'))
            ->orderBy('schoolresult.id', 'desc')->first();
        // dd($result);
        return view('school.student-result', ['result' => $result])->with('title', $title);
    }

    public function studentSchedule()
    {
        $title = "Student | Schedule";


        $schedule = DB::table('schoolschedule')
            ->join('users', 'schoolschedule.school', '=', 'users.id')
            ->join('schoolclass', 'schoolschedule.class', '=', 'schoolclass.id')
            ->join('schoolsection', 'schoolschedule.section', '=', 'schoolsection.id')
            ->select('schoolschedule.*', 'users.schoolname', 'schoolclass.class', 'schoolsection.section', 'users.name', 'users.contact')
            ->where('users.schoolname', Session::get('schoolname'))

            ->orderBy('schoolschedule.id', 'desc')->get();

        // dd($schedule);

        return view('school.student-sehedule', ['schedule' => $schedule])->with('title', $title);
        // return view('school.student-fees')->with('title', $title);

    }
    // Contact Page

    public function contactForm()
    {
        $title = "School | Contact";

        $schoollist = DB::table('users')
            ->select('id', 'schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
            ->where('status', 1)->where('usertype', 'school')->where('schoolname', session('schoolname'))
            ->get();

        $schooldetails = DB::table('schooldetails')
            ->join('users', 'schooldetails.school_name', '=', 'users.id')
            ->select('schooldetails.id', 'schooldetails.*', 'users.name', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->first();

        $socialicones = DB::table('schoolsetting')
            ->join('users', 'schoolsetting.school', '=', 'users.id')
            ->select('schoolsetting.*', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))->first();

        return view('school.contact', ['schoollist' => $schoollist, 'schooldetails' => $schooldetails, 'socialicones' => $socialicones])->with('title', $title);
    }


    public function studentFees()
    {
        $title = "Student | Fees";

        $bankdetails = DB::table('schoolbankdetails')
            ->join('users', 'schoolbankdetails.school', '=', 'users.id')
            ->select('schoolbankdetails.*', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->first();

        $schoollist = DB::table('users')
            ->select('id', 'schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
            ->where('status', 1)->where('usertype', 'school')->where('schoolname', session('schoolname'))
            ->get();

        $classlist = DB::table('schoolclass')
            ->join('users', 'schoolclass.user_id', '=', 'users.id')
            ->select('schoolclass.class', 'schoolclass.id', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolclass.id', 'desc')->get();

        $sectiondata = DB::table('schoolsection')
            ->join('schoolclass', 'schoolsection.class', '=', 'schoolclass.id')
            ->join('users', 'schoolclass.user_id', '=', 'users.id')
            ->select('schoolsection.id AS sectionid', 'schoolsection.*', 'schoolclass.class', 'users.id', 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolsection.id', 'desc')->get();

        return view('school.student-fees', ['bankdetails' => $bankdetails, 'schoollist' => $schoollist, 'classlist' => $classlist, 'sectiondata' => $sectiondata])->with('title', $title);
    }


    public function studentFeesStore(Request $request)
    {
        $validate = $request->validate([
            'school' => 'required',
            'studentid' => 'required|digits:10',
            'studentname' => 'required|string',
            'class' => 'required',
            'section' => 'required',
            'paymentrecipt' => 'required|file|mimes:png,jpg,jpeg,pdf|max:2048'
        ]);

        $paymentrecipt = 'paymentrecipt' . time() . '.' . $request->paymentrecipt->extension();
        $request->paymentrecipt->move(public_path('otherstoredfiles'), $paymentrecipt);

        DB::table('schoolstudentfees')->insert([
            'school' => $validate['school'],
            'studentid' => $validate['studentid'],
            'studentname' => $validate['studentname'],
            'class' => $validate['class'],
            'section' => $validate['section'],
            'paymentrecipt' => $paymentrecipt
        ]);

        return redirect()->route('student.fees')->with('success', 'Payment details uploaded successfully!');
    }


    public function contactSendMessage(Request $request)
    {
        $validate = $request->validate([
            'school' => 'required',
            'name' => 'required|string',
            'contact' => 'required|digits:10',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('schoolcontact')->insert([
            'school' => $validate['school'],
            'name' => $validate['name'],
            'contact' => $validate['contact'],
            'email' => $validate['email'],
            'message' => $validate['message'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('contact.form')->with('success', 'Message sent successfully!');
    }
}
