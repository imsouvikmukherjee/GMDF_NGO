<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MembershipController extends Controller
{
    public function ngoMembership(){
        $title = "NGO | Membership";
        $records = DB::table('ngomembership')->orderBy('id','desc')->paginate(5);
        return view('admin.membership',['records' => $records])->with('title',$title);
    }

    public function membershipDelete($id){
        $id = decrypt($id);

        if($id > 0){
            $photoid = DB::table('ngomembership')->where('id',$id)->value('photoid');
             File::delete(public_path('img').'/'.$photoid);

         }

         if($id > 0){
            $paymentrecipt = DB::table('ngomembership')->where('id',$id)->value('paymentrecipt');
             File::delete(public_path('img').'/'.$paymentrecipt);

         }

        DB::table('ngomembership')->where('id',$id)->delete();
        return redirect()->route('ngo.membership')->with('success','Data deleted successfully!');
    }

    public function membershipDetails($id){

        $id = decrypt($id);

        $data = DB::table('ngomembership')
        ->select('id','name','email','contact','photoid','paymentrecipt','address',  DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('id',$id)->first();

        $title = "NGO | Membership Details";
        return view('admin.membership-details',['data' => $data])->with('title',$title);
    }
}
