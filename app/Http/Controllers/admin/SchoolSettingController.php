<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SchoolSettingController extends Controller
{
    public function schoolSetting(){
        $title = "School | Setting";

        $schoollist = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();

        // $data = DB::table('schoolsetting')
        // ->join('users','schoolsetting.school','=','users.id')
        // ->select('schoolsetting.*','users.schoolname','users.id AS userid')
        // ->where('users.schoolname',Session::get('schoolname'))
        // ->first();

        return view('admin.school-setting',['schoollist' => $schoollist])->with('title',$title);
    }

    
    public function schoolSettingStore(Request $request){
        $validate = $request->validate([
            'school' => 'required|unique:schoolsetting',
            'email' => 'required|email',
            'contact' => 'required',
           
            'address' => 'required'
        ]);

        DB::table('schoolsetting')->insert([
            'school' => $validate['school'],
            'email' => $validate['email'],
            'contact' => $validate['contact'],
            'facebook' =>$request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkdin' => $request->linkdin,
            'address' => $validate['address']
        ]);

        return redirect()->route('school.setting')->with('success','All changes are saved');
    }

    public function schoolSettingView(){
        $title = "School | Setting Details";

        $records = DB::table('schoolsetting')
        ->join('users','schoolsetting.school','=','users.id')
        ->select('schoolsetting.*','users.schoolname','users.id AS userid')
        ->where('users.schoolname',Session::get('schoolname'))
        ->first();

        return view('admin.school-setting-view',['records' => $records])->with('title',$title);
    }


    public function schoolSettingViewDelete($id){
        $id = decrypt($id);
        DB::table('schoolsetting')->where('id',$id)->delete();
        return redirect()->route('school.setting')->with('success','Setting deleted successfully!');
    }
}
