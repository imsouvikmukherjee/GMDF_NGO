<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NgoSettingController extends Controller
{
    public function ngoSetting(){
        $data = DB::table('ngosetting')->find(1);
      
        $title = "NGO | Setting";
        return view('admin.ngo-setting',['data' => $data])->with('title',$title);
    }

    public function updateStore(Request $request,$id){
        $id = decrypt($id);

        $validate = $request->validate([
            'email' => 'required|email',
            'contact' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'linkdin' => 'required',
            'address' => 'required'
        ]);

        DB::table('ngosetting')->where('id',$id)->update([
            'email' => $validate['email'],
            'contact' => $validate['contact'],
            'facebook' => $validate['facebook'],
            'twitter' => $validate['twitter'],
            'instagram' => $validate['instagram'],
            'linkdin' => $validate['linkdin'],
            'address' => $validate['address']
        ]);

        return redirect()->route('ngo.setting')->with('success','All changes are saved!');
    }
}
