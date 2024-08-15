<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    public function schoolSection(){
        $title = "School | Section";

        $sectionlist = DB::table('schoolsection')
        ->join('schoolclass','schoolsection.class','=','schoolclass.id')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolsection.*','schoolclass.class')
        ->where('users.schoolname', Session::get('schoolname'))
        // ->where('users.usertype', 'Student')
        ->orderBy('schoolsection.id','desc')->paginate(5);

        return view('admin.school-section', ['sectionlist' => $sectionlist])->with('title',$title);
    }

    public function addSchoolSection(){
        $title = "School | Add Section";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        $classlist = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.class','schoolclass.id')
        ->where('users.schoolname', Session::get('schoolname'))
        ->orderBy('schoolclass.id','desc')->get();

        return view('admin.add-section',['classlist' => $classlist, 'schoollist' => $schoollist])->with('title',$title);
    }

    public function addSectionStore(Request $request){
      
       
      
        $validate = $request->validate([
           
            'class' => 'required',
            'section' => 'required|string'
        ]);

        DB::table('schoolsection')->insert([
            'user_id' => $request['user_id'],
            'class' => $validate['class'],
            'section' => $validate['section']
         ]);

         return redirect()->route('school.section')->with('success','Section added successfully!');
    }

    public function sectionDelete($id){
        $id = decrypt($id);

        DB::table('schoolsection')->where('id',$id)->delete();
        return redirect()->route('school.section')->with('success','Section deleted successfully!');
    }
}
