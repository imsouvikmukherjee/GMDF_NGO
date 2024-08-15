<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NgoContactController extends Controller
{
    public function contactMessage(){
        $records = DB::table('ngocontact')->select('id','name','email','message', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_date"))
        ->orderBy('id','desc')->paginate(5);
        $title = "NGO | Contact";
        return view('admin.contact',['records'=>$records])->with('title',$title);
    }

    public function deleteContact($id){
        $id = decrypt($id);
        DB::table('ngocontact')->where('id',$id)->delete();
        return redirect()->route('ngo.contact.message')->with('success','Contact message deleted successfully!');
    }
}
