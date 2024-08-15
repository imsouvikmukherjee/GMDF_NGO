<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function contactForm(){
        $title = "NGO | Contact";

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.contact', ['settingdata' => $settingdata])->with('title',$title);
    }

    public function contactStore(Request $request){
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('ngocontact')->insert([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'message' => $validate['message'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('contact.Form')->with('success','Messege sent successfully');
    }
}
