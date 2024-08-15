<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function schoolStudents(){
        $title = "School | Students";

        // $studentsdata = DB::table('studentdetails')->join('users','studentdetails.school_name','=','users.id')
        // ->select('studentdetails.id AS sid','studentdetails.school_name','users.*')
        // ->where('users.usertype', 'school')
        // ->orWhere('users.usertype','teacher')
        // ->where('users.schoolname', Session::get('schoolname'))
        // ->orderBy('sid','desc')->paginate(5);

        $studentsdata = DB::table('studentdetails')
        ->join('users','studentdetails.student_id','=','users.id')
        ->select('studentdetails.id AS sid','users.*')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('sid','desc')
        ->paginate(10);

        return view('admin.school-students', ['studentsdata' => $studentsdata])->with('title',$title);
    }

    public function addStudentCredentials(){
        $title = "School | Add Student Credential";
        return view('admin.add-students-credentials')->with('title',$title);
    }

    public function studentDetails($id){

        $id = decrypt($id); 
        
        // $data = DB::table('studentdetails')
        // ->join('schoolsection','studentdetails.section','=','schoolsection.id')
        // ->join('schoolclass','schoolsection.class','=','schoolclass.id')
        // ->join('users','schoolclass.user_id','=','users.id')
        // ->select('studentdetails.*','schoolsection.section','schoolclass.class','users.schoolname','users.contact')
        // ->where('studentdetails.id',$id)
        // ->first();

      $data = DB::table('studentdetails')
      ->join('users','studentdetails.student_id','=','users.id')
      ->select('studentdetails.*','users.*', DB::raw("DATE_FORMAT(studentdetails.created_at, '%Y-%m-%d') AS created_at"),
      DB::raw("DATE_FORMAT(studentdetails.updated_at, '%Y-%m-%d') AS updated_at"))
      ->where('studentdetails.id',$id)
      ->first();

      $additionaldata = DB::table('studentdetails')
      ->join('schoolsection','studentdetails.section','=','schoolsection.id')
      ->select('studentdetails.*','schoolsection.section')
      ->where('studentdetails.id',$id)
      ->first();

    //   dd($data);

        $title = "School | Student Details";
        return view('admin.school-students-view',['data'=> $data, 'additionaldata' => $additionaldata])->with('title',$title);
    }


    public function addStudentDetails(){
        $title = "School | Add Student Details";

        $studentlist = DB::table('users')->where('usertype','Student')->where('schoolname',session('schoolname'))->orderBy('id','desc')->get();

        $classdata = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.*','users.id','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolclass.id','desc')->get();

        $sectiondata = DB::table('schoolsection')
        ->join('schoolclass','schoolsection.class','=','schoolclass.id')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolsection.id AS sectionid','schoolsection.*','schoolclass.class','users.id','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolsection.id','desc')->get();

        // dd($sectiondata);

        return view('admin.add-students', ['classdata' => $classdata, 'sectiondata' => $sectiondata, 'studentlist' => $studentlist])->with('title',$title);
    }


    public function studentDetailsStore(Request $request){
        // dd($request);
        $validate = $request->validate([
            'student_id' => 'required|unique:studentdetails',
            'class' => 'required',
            'section' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'documentofstudent' => 'required|file|mimes:pdf|max:2048',
            'gurdiansname' => 'required|string',
            'gurdianscontact' => 'required|digits:10',
            'optionalcontact' => 'nullable|digits:10',
            'gurdiansemail' => 'nullable|email',
            'studentpicture' => 'required|image|mimes:jpg,jpeg|max:2048',
            'documentofparent' => 'required|file|mimes:pdf|max:2048',
            'parmanentaddress' => 'required',
            'currentaddress' => 'required',
            'bloodgroup' => 'required',
            'rollno' => 'required'

        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $documentofstudent = 'studentdocument'.time().'.'.$request->documentofstudent->extension();
        $request->documentofstudent->move(public_path('studentdetails'),$documentofstudent);

        $studentpicture = 'studentpicture'.time().'.'.$request->studentpicture->extension();
        $request->studentpicture->move(public_path('studentdetails'),$studentpicture);

        $documentofparent = 'parentdocument'.time().'.'.$request->documentofparent->extension();
        $request->documentofparent->move(public_path('studentdetails'),$documentofparent);

        DB::table('studentdetails')->insert([
            'student_id' => $validate['student_id'],
            'class' => $validate['class'],
            'section' => $validate['section'],
            'gender' => $validate['gender'],
            'dateofbirth' => $validate['dateofbirth'],
            'documentofstudent' => $documentofstudent,
            'gurdiansname' => $validate['gurdiansname'],
            'gurdianscontact' => $validate['gurdianscontact'],
            'optionalcontact' => $validate['optionalcontact'],
            'gurdiansemail' => $validate['gurdiansemail'],
            'studentpicture' => $studentpicture,
            'documentofparent' => $documentofparent,
            'parmanentaddress' => $validate['parmanentaddress'],
            'currentaddress' => $validate['currentaddress'],
            'bloodgroup' => $validate['bloodgroup'],
            'rollno' => $validate['rollno'],

            'created_at' => $currentDate


        ]);

        return redirect()->route('school.students')->with('success','Student details added successfuly!');
    }

    public function studentDelete($id){
        $id = decrypt($id);

        if($id > 0){
            $documentofstudent = DB::table('studentdetails')->where('id',$id)->value('documentofstudent');
             File::delete(public_path('studentdetails').'/'.$documentofstudent);

         }

         if($id > 0){
            $studentpicture = DB::table('studentdetails')->where('id',$id)->value('studentpicture');
             File::delete(public_path('studentdetails').'/'.$studentpicture);
         }

         if($id > 0){
            $documentofparent = DB::table('studentdetails')->where('id',$id)->value('documentofparent');
             File::delete(public_path('studentdetails').'/'.$documentofparent);

         }

        DB::table('studentdetails')->where('id',$id)->delete();
        
        return redirect()->route('school.students')->with('success','Record deleted successfully!');
    }

    public function studentUpdateForm($id){

        $id = decrypt($id);

        $studentlist = DB::table('studentdetails')->where('id',$id)->orderBy('id','desc')->first();

        $classdata = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.*','users.id','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolclass.id','desc')->get();

        $sectiondata = DB::table('schoolsection')
        ->join('schoolclass','schoolsection.class','=','schoolclass.id')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolsection.id AS sectionid','schoolsection.*','schoolclass.class','users.id','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolsection.id','desc')->get();

        $title = "School | Studdent Update";
        return view('admin.school-students-update', ['classdata' => $classdata, 'sectiondata' => $sectiondata, 'studentlist' => $studentlist])->with('title',$title);
    }

    public function studentUpdateStore(Request $request, $id){

        $id = decrypt($id);

        $validate = $request->validate([
            
            'class' => 'required',
            'section' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'documentofstudent' => 'required|file|mimes:pdf|max:2048',
            'gurdiansname' => 'required|string',
            'gurdianscontact' => 'required|digits:10',
            'optionalcontact' => 'nullable|digits:10',
            'gurdiansemail' => 'nullable|email',
            'studentpicture' => 'required|image|mimes:jpg,jpeg|max:2048',
            'documentofparent' => 'required|file|mimes:pdf|max:2048',
            'parmanentaddress' => 'required',
            'currentaddress' => 'required',
            'bloodgroup' => 'required',
            'rollno' => 'required'

        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        if($request->hasfile('documentofstudent')){

            if($id > 0){
                $documentofstudent = DB::table('studentdetails')->where('id',$id)->value('documentofstudent');

                if ($request->hasFile('documentofstudent')) {
                    File::delete(public_path('studentdetails').'/'.$documentofstudent); 
                }
            }

            $studentdocument = 'studentdocument'.time().'.'.$request->documentofstudent->extension();
            $request->documentofstudent->move(public_path('studentdetails'),$studentdocument);

        }

        if($request->hasfile('studentpicture')){

            if($id > 0){
                $studentpicture = DB::table('studentdetails')->where('id',$id)->value('studentpicture');

                if ($request->hasFile('studentpicture')) {
                    File::delete(public_path('studentdetails').'/'.$studentpicture); 
                }
            }

            $studentpicture = 'studentpicture'.time().'.'.$request->studentpicture->extension();
            $request->studentpicture->move(public_path('studentdetails'),$studentpicture);

        }

        if($request->hasfile('documentofparent')){

            if($id > 0){
                $documentofparent = DB::table('studentdetails')->where('id',$id)->value('documentofparent');

                if ($request->hasFile('documentofparent')) {
                    File::delete(public_path('studentdetails').'/'.$documentofparent); 
                }
            }

            $parentdocument = 'parentdocument'.time().'.'.$request->documentofparent->extension();
            $request->documentofparent->move(public_path('studentdetails'),$parentdocument);

        } 

        DB::table('studentdetails')->where('id',$id)->update([
            'class' => $validate['class'],
            'section' => $validate['section'],
            'gender' => $validate['gender'],
            'dateofbirth' => $validate['dateofbirth'],
            'documentofstudent' => $studentdocument,
            'gurdiansname' => $validate['gurdiansname'],
            'gurdianscontact' => $validate['gurdianscontact'],
            'optionalcontact' => $validate['optionalcontact'],
            'gurdiansemail' => $validate['gurdiansemail'],
            'studentpicture' => $studentpicture,
            'documentofparent' => $parentdocument,
            'parmanentaddress' => $validate['parmanentaddress'],
            'currentaddress' => $validate['currentaddress'],
            'bloodgroup' => $validate['bloodgroup'],
            'rollno' => $validate['rollno'],

            'updated_at' => $currentDate
        ]);

        return redirect()->route('school.students')->with('success','Record updated successfully!');

    }


    // public function studentSearch(Request $request){
    //     $validate = $request->validate([
    //         'studentsearch' => 'required|integer|digits:10'
    //     ]);

    //     $studentId = $request->input('studentsearch');
    //     $student_search_data = DB::table('studentdetails')->where('id',$studentId)->paginate(5);
    //     return view('admin.school-students',['studentdata' => $student_search_data]);
    // }
}
