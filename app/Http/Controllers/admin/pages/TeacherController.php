<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    public function schoolTeacher(){
        $title = "School | Teacher";
        
        $teacherdata = DB::table('schoolteacher')
        ->join('users','schoolteacher.teacher','=','users.id')
        ->select('schoolteacher.id AS teacherid','schoolteacher.*','users.*')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('teacherid','desc')
        ->paginate(5);

        return view('admin.school-teachers',['teacherdata' => $teacherdata])->with('title',$title);
    }

    // public function addTeacherCredential(){
    //     $title = "School | Add Teacher Credential";
    //     return view('admin.add-teachers-credential')->with('title',$title);
    // }

    public function teacherDetails($id){
        $title = "School | Teacher Details";
        $id = decrypt($id);
        $data = DB::table('schoolteacher')
        ->join('users','schoolteacher.teacher','=','users.id')
        ->select('schoolteacher.*',DB::raw("DATE_FORMAT(schoolteacher.created_at, '%Y-%m-%d') AS created_at"),DB::raw("DATE_FORMAT(schoolteacher.updated_at, '%Y-%m-%d') AS updated_at"),'users.*')
        ->where('schoolteacher.id',$id)
        ->where('users.schoolname',Session::get('schoolname'))
        ->first();

        return view('admin.school-teachers-view',['data' => $data])->with('title',$title);
    }

    public function addTeacherDetails(){
        $title = "School | Add Teacher Details";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        $teacherlist = DB::table('users')->where('usertype','Teacher')->where('schoolname',Session::get('schoolname'))
        ->select('users.*')->orderBy('id','desc')->get();

        return view('admin.add-teachers',['schoollist' => $schoollist, 'teacherlist' => $teacherlist])->with('title',$title);
    }

    public function addTeacherDetailsStore(Request $request){
        

        $validate = $request->validate([
            'school' => 'required',
            'teacher' => 'required|unique:schoolteacher',
            'gender' => 'required',
            'bloodgroup' => 'required',
            'dateofbirth' => 'required',
            'dateofjoining' => 'required',
            'designation' => 'required|string',
            'teacherdocument' => 'required|file|mimes:pdf|max:2048',
            'address' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $teacherdocument = 'teacherdocument'.time().'.'.$request->teacherdocument->extension();
        $request->teacherdocument->move(public_path('studentdetails'),$teacherdocument);

        DB::table('schoolteacher')->insert([
            'school' => $validate['school'],
            'teacher' => $validate['teacher'],
            'gender' => $validate['gender'],
            'bloodgroup' => $validate['bloodgroup'],
            'dateofbirth' => $validate['dateofbirth'],
            'dateofjoining' => $validate['dateofjoining'],
            'designation' => $validate['designation'],
            'teacherdocument' => $teacherdocument,
            'address' => $validate['address'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('school.teacher')->with('success','Teacher added successfully!');
    }

    public function teacherDelete($id){
        $id = decrypt($id);

        if($id > 0){
            $teacherdocument = DB::table('schoolteacher')->where('id',$id)->value('teacherdocument');
             File::delete(public_path('studentdetails').'/'.$teacherdocument);

         }

        DB::table('schoolteacher')->where('id',$id)->delete();
        return redirect()->route('school.teacher')->with('success','Record deleted successfully!');
    }

    public function teacherUpdateForm($id){
        $id = decrypt($id);

        $title = "Update Teacher | School";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        $teacherlist = DB::table('users')->where('usertype','Teacher')->where('schoolname',Session::get('schoolname'))
        ->select('users.*')->orderBy('id','desc')->get();

        $teacherdata = DB::table('schoolteacher')->where('id',$id)->first();

        return view('admin.update-teacher-details',['schoollist' => $schoollist, 'teacherlist' => $teacherlist, 'teacherdata' => $teacherdata])->with('title',$title);
    }

    public function updateTeacherStore(Request $request, $id){
        $id = decrypt($id);

        $validate = $request->validate([
            // 'school' => 'required',
            // 'teacher' => 'required|unique:schoolteacher',
            'gender' => 'required',
            'bloodgroup' => 'required',
            'dateofbirth' => 'required',
            'dateofjoining' => 'required',
            'designation' => 'required|string',
            'teacherdocument' => 'required|file|mimes:pdf|max:2048',
            'address' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        if($request->hasfile('teacherdocument')){

            if($id > 0){
                $teacherdocument = DB::table('schoolteacher')->where('id',$id)->value('teacherdocument');

                if ($request->hasFile('teacherdocument')) {
                    File::delete(public_path('studentdetails').'/'.$teacherdocument); 
                }
            }

            $teacherdocument = 'teacherdocument'.time().'.'.$request->teacherdocument->extension();
            $request->teacherdocument->move(public_path('studentdetails'),$teacherdocument);

        }

        DB::table('schoolteacher')->where('id',$id)->update([
            // 'school' => $validate['school'],
            // 'teacher' => $validate['teacher'],
            'gender' => $validate['gender'],
            'bloodgroup' => $validate['bloodgroup'],
            'dateofbirth' => $validate['dateofbirth'],
            'dateofjoining' => $validate['dateofjoining'],
            'designation' => $validate['designation'],
            'teacherdocument' => $teacherdocument,
            'address' => $validate['address'],
            'updated_at' => $currentDate
        ]);

        return redirect()->route('school.teacher')->with('success','Record updated successfully!');
    }
}
