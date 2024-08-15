<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{
    public function schoolSubject(){
        $title = "School | Subject";

        $subjectdata = DB::table('schoolsubjects')
        ->join('users','schoolsubjects.teacher','=','users.id')
        ->join('schoolclass','schoolsubjects.class','=','schoolclass.id')
        ->select('schoolsubjects.*','users.name','schoolclass.class')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolsubjects.id','desc')->paginate(5);

        return view('admin.school-subjects', ['subjectdata' => $subjectdata])->with('title',$title);
    }

    public function addSubject(){
        $title = "School | Add Subject";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        $teacherlist = DB::table('users')
        ->select('users.*')
        ->where('status',1)->where('usertype','Teacher')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')
        ->get();

        $classlist = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.id AS id','schoolclass.*','users.schoolname')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')->get();


        return view('admin.add-subject',['schoollist' => $schoollist, 'teacherlist' => $teacherlist, 'classlist' => $classlist])->with('title',$title);
    }

    public function addSubjectStore(Request $request){
        $validate = $request->validate([
            'school' => 'required',
            'teacher' => 'required',
            'class' => 'required',
            'subject' => 'required|string',

        ]);

        DB::table('schoolsubjects')->insert([
            'school' => $validate['school'],
            'teacher' => $validate['teacher'],
            'class' => $validate['class'],
            'subject' => $validate['subject'],
            'description' => $request->description
        ]);

        return redirect()->route('school.subject')->with('success','Subject added successfully!');
    }

    public function subjectDelete($id){
        $id = decrypt($id);
        DB::table('schoolsubjects')->where('id',$id)->delete();
        return redirect()->route('school.subject')->with('success','Subject deleted successfully!');
    }

    public function subjectUpdateForm($id){
        $id = decrypt($id);
        $title = "Update Subject | School";
      

        $teacherlist = DB::table('users')
        ->select('users.*')
        ->where('status',1)->where('usertype','Teacher')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')
        ->get();

        $classlist = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.id AS id','schoolclass.*','users.schoolname')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')->get();

        $data = DB::table('schoolsubjects')->where('id',$id)->first();

        return view('admin.update-school-subject',['teacherlist' => $teacherlist, 'classlist' => $classlist, 'data' => $data])->with('title',$title);
    }

    public function subjectUpdateStore(Request $request, $id){
        $id = decrypt($id);

        $validate = $request->validate([
        
            'teacher' => 'required',
            'class' => 'required',
            'subject' => 'required|string',

        ]);

        DB::table('schoolsubjects')->where('id',$id)->update([
            'teacher' => $validate['teacher'],
            'class' => $validate['class'],
            'subject' => $validate['subject'],
            'description' => $request->description
        ]);

        return redirect()->route('school.subject')->with('success','Subject updated successfully');
    }
}
