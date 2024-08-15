<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function schoolSchedule(){
        $title = "School | Schedule";

        $scheduledata = DB::table('schoolschedule')
        ->join('users','schoolschedule.school','=','users.id')
        ->join('schoolclass','schoolschedule.class','=','schoolclass.id')
        ->join('schoolsection','schoolschedule.section','=','schoolsection.id')
        ->select('schoolschedule.id AS id','schoolschedule.*','users.schoolname','schoolclass.class','schoolsection.section')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')->paginate(5);

        return view('admin.school-schedule', ['scheduledata' => $scheduledata])->with('title',$title);
    }

    public function addSchedule(){
        $title = "School | Add Schedule";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        $classdata = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.id AS id','schoolclass.*','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolclass.id','desc')->get();

        $sectiondata = DB::table('schoolsection')
        ->join('schoolclass','schoolsection.class','=','schoolclass.id')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolsection.id AS sectionid','schoolsection.*','schoolclass.class','users.id','users.schoolname')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('schoolsection.id','desc')->get();

        return view('admin.add-schedule', ['schoollist' => $schoollist, 'classdata' => $classdata, 'sectiondata' => $sectiondata])->with('title',$title);
    }

    public function addScheduleStore(Request $request){
        $validate = $request->validate([
            'school' => 'required',
            'class' => 'required',
            'section' => 'required',
            'scheduledocument' => 'required|file|mimes:pdf|max:2048'
        ]);

        $scheduledocument = 'scheduledocument'.time().'.'.$request->scheduledocument->extension();
        $request->scheduledocument->move(public_path('otherstoredfiles'),$scheduledocument);

        DB::table('schoolschedule')->insert([
            'school' => $validate['school'],
            'class' => $validate['class'],
            'section' => $validate['section'],
            'scheduledocument' => $scheduledocument
        ]);

        return redirect()->route('school.schedule')->with('success','Schedule added successfully!');
    }



    public function scheduleDelete($id){
        $id = decrypt($id);

        if($id > 0){
            $scheduledocument = DB::table('schoolschedule')->where('id',$id)->value('scheduledocument');
             File::delete(public_path('otherstoredfiles').'/'.$scheduledocument);

         }

         DB::table('schoolschedule')->where('id',$id)->delete();
         return redirect()->route('school.schedule')->with('success','Record deleted successfully!');
    }
}
