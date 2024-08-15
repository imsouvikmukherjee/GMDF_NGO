<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SchoolNoticeController extends Controller
{
    public function schoolNotice(){
        $title = "School | Notice";

        $data = DB::table('schoolnotice')
        ->join('users','schoolnotice.schoolid','=','users.id')
        ->select('schoolnotice.id AS noticeid','schoolnotice.*','users.*')
        ->where('users.schoolname',Session::get('schoolname'))
        ->orderBy('noticeid','desc')->paginate(5);

        return view('admin.school-notice',['data' => $data])->with('title',$title);
    }

    public function addSchoolNotice(){
        $title = "School | Add Notice";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        return view('admin.add-notice-school',['schoollist' => $schoollist])->with('title',$title);
    }

    public function addSchoolNoticeStore(Request $request){
        

        $validate = $request->validate([
            'schoolid' => 'required',
            'title' => 'required|string',
            'description' => 'required'
        ]);

        DB::table('schoolnotice')->insert([
            'schoolid' => $validate['schoolid'],
            'title' => $validate['title'],
            'description' => $validate['description']
        ]);

        return redirect()->route('school.notice')->with('success','Notice added successfully!');
    }

    public function deleteSchoolNotice($id){
        $id = decrypt($id);
        DB::table('schoolnotice')->where('id',$id)->delete();
        return redirect()->route('school.notice')->with('success','Notice deleted successfully!');
    }

    public function editNotice($id){
        $id = decrypt($id);

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        $title = 'School | Update Notice';
        $data = DB::table('schoolnotice')->where('id',$id)->first();

        return view('admin.school-notice-update',['schoollist' => $schoollist, 'data' => $data])->with('title',$title);

    }

    public function editNoticeStore(Request $request, $id){
        $id = decrypt($id);
        // dd($id);
        $validate = $request->validate([
            'schoolid' => 'required',
            'title' => 'required|string',
            'description' => 'required'
        ]);

        DB::table('schoolnotice')->where('id',$id)->update([
            'schoolid' => $validate['schoolid'],
            'title' => $validate['title'],
            'description' => $validate['description']
        ]);

        return redirect()->route('school.notice')->with('success','Notice updated successfully!');
    }
}
