<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function showNotice(){
        $title = "NGO | Notice";
        $records = DB::table('ngonotice')->orderBy('id','desc')->get();

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.notice',['records' => $records, 'settingdata' => $settingdata])->with('title',$title);
    }
}
