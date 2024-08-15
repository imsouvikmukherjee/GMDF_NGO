<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FundrisingDonationController extends Controller
{
    public function fundrisingDonation($id){
        $id = decrypt($id);
        // dd($id);
        $title = "Fundrising Donation";

        $paymentdetails = DB::table('fundrisingpost')->select('fundrisingpost.*')->where('id',$id)->first();

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.fundrising-donation', ['paymentdetails' => $paymentdetails, 'settingdata' => $settingdata])->with('title',$title);
    }
}
