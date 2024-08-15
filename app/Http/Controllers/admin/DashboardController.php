<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        $title = "Dashboard";

        // For only super admin

        $students = DB::table('users')->where('usertype','Student')->where('status',1)->count();
        $newscategory = DB::table('newscategory')->where('status',1)->count();
        $school = DB::table('users')->where('usertype','School')->where('status',1)->count();
        $fundrisingpost = DB::table('fundrisingpost')->where('status',1)->count();
        $notice = DB::table('ngonotice')->count();
        $news = DB::table('news')->where('status',1)->count();
        $ngocontact = DB::table('ngocontact')->count();
        $membership = DB::table('ngomembership')->count();

        // for school admin and teacher dashboard

        $schoolnotice = DB::table('schoolnotice')->join('users','schoolnotice.schoolid','=','users.id')
        ->select('schoolnotice.*','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))->count();

        $teacher = DB::table('users')->where('usertype','Teacher')->where('users.schoolname',Session::get('schoolname'))->where('status',1)->count();
        $studentsSchool = DB::table('users')->where('usertype','Student')->where('status',1)->where('schoolname',Session::get('schoolname'))->count();
        $class = DB::table('schoolclass')->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.*','users.schoolname')->where('users.schoolname',Session::get('schoolname'))->count();

        $subjects = DB::table('schoolsubjects')->join('users','schoolsubjects.school','=','users.id')
        ->select('schoolsubjects.*','users.schoolname')->where('users.schoolname',Session::get('schoolname'))->count();

        $studentDetails = DB::table('studentdetails')->join('users','studentdetails.student_id','=','users.id')
        ->select('studentdetails.*','users.schoolname')->where('users.schoolname',Session::get('schoolname'))->count();
        // dd($studentDetails);

        $pendingStudentDetails = $studentsSchool - $studentDetails;
        
        $teacherDetails = DB::table('schoolteacher')->join('users','schoolteacher.school','=','users.id')
        ->select('schoolteacher.*','users.schoolname')->where('users.schoolname',Session::get('schoolname'))->count();

        $pendingTeacherDetails = $teacher - $teacherDetails;

        return view('admin.index',['students' => $students, 'newscategory' => $newscategory, 'school' => $school, 'fundrisingpost' => $fundrisingpost, 'notice' => $notice, 'news' => $news, 'ngocontact' => $ngocontact, 'membership' => $membership,
        'schoolnotice' => $schoolnotice, 'teacher' => $teacher, 'studentsSchool' => $studentsSchool, 'class' => $class, 'subjects' => $subjects, 'pendingStudentDetails' => $pendingStudentDetails, 'pendingTeacherDetails' => $pendingTeacherDetails])->with('title',$title);
    }
}
