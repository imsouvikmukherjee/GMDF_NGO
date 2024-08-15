<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    public function schoolClass(){
        $title = "School | Class";
        $classdata = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.*')
        ->where('users.schoolname', Session::get('schoolname'))
        ->orderBy('schoolclass.id','desc')->paginate(5);
        return view('admin.school-class', ['classdata' => $classdata])->with('title',$title);
    }

    public function addSchoolClass(){
        $title = 'School | Add Class';

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        return view('admin.add-class', ['schoollist' => $schoollist])->with('title',$title);
    }

    public function addClassStore(Request $request){
        $validate = $request->validate([
            'user_id' => 'required|string',
            'class' => 'required|string'
            // 'class' => 'required|string|unique:schoolclass'
        ]);

        DB::table('schoolclass')->insert([
            'user_id' => $validate['user_id'],
            'class' => $validate['class']
        ]);

        return redirect()->route('school.class')->with('success','Class added successfully');
    }

    public function classDelete($id){
        $id = decrypt($id);

        DB::table('schoolclass')->where('id',$id)->delete();
        return redirect()->route('school.class')->with('success','Class deleted successfully!');
    }
}
