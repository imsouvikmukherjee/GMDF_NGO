<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembershipController extends Controller
{
    public function membership(){
        $title = 'NGO | Membership';

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.membership', ['settingdata' => $settingdata])->with('title',$title);
    }

    public function addMembership(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:ngomembership',
            'contact' => 'required|digits:10|unique:ngomembership',
            'photoid' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            'paymentrecipt' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            'address' => 'required|string'
        ]);
        

        $currentDate = Carbon::now()->format('Y-m-d');

        $photoid = 'photoid'.time().'.'.$request->photoid->extension();
        $request->photoid->move(public_path('img'),$photoid);

        $paymentrecipt = 'paymentrecipt'.time().'.'.$request->paymentrecipt->extension();
        $request->paymentrecipt->move(public_path('img'),$paymentrecipt);
       
        DB::table('ngomembership')->insert([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'contact' => $validate['contact'],
            'photoid' => $photoid,
            'paymentrecipt' => $paymentrecipt,
            'address' => $validate['address'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('membership')->with('success','Thank you for choosing to be a part of our community!');
    }   
}
