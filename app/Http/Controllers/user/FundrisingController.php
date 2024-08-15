<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FundrisingController extends Controller
{
    public function fundrising(){
        $title = 'NGO | Fundrising';
        $records = DB::table('fundrisingpost')
        ->select('id','title',DB::raw("SUBSTRING_INDEX(description, ' ', 10) AS description"),'price','image','status', 
        DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('status',1)->orderBy('id','desc')->paginate(6);

        $settingdata = DB::table('ngosetting')->where('id',1)->first();


        return view('user.causes',['records'=>$records, 'settingdata' => $settingdata])->with('title',$title);
    }

    public function fundrisingDetails($id){
        $id = decrypt($id);

        $title = "NGO | Fundrising Details";
        $data = DB::table('fundrisingpost')->select('id','title','description','price','image','status',   DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))->where('id',$id)->first();
        $data1 = DB::table('fundrisingpost')->select('id','title','description','price','image','status',   DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))->where('status',1)->orderBy('id','desc')->limit(6)->get();
        
        $settingdata = DB::table('ngosetting')->where('id',1)->first();
        
        return view('user.fundrising-details',['data' => $data, 'data1' => $data1, 'settingdata' => $settingdata])->with('title',$title);
    }


    public function applyFundrising(){
        $title = "Apply For Crowdfunding";
        $settingdata = DB::table('ngosetting')->where('id',1)->first();
        return view('user.apply_for_fundrising',['settingdata' => $settingdata])->with('title',$title);
    }
}
