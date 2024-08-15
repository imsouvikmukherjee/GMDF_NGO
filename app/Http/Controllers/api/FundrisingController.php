<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\TryCatch;
use Carbon\Carbon;

class FundrisingController extends Controller
{
    public function showFundrisingPost(){
        $records = DB::table('fundrisingpost')
        ->select('id','title','price','image','status', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_date"),
        'bank_name','account_number','ifsc_code','branch','account_holders_name','upi_id','qr_code')
        ->where('id',7)
        ->orderBy('id','desc')->first();

        return response()->json([
            'success' => true,
            'data' => $records
        ], 200);
        
    }


    public function ngoContactMessage(Request $request){
      
        try {
            $validate = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:ngocontact',
                'message' => 'required'
            ]);
    
            DB::table('ngocontact')->insert([
                'name' => $validate['name'],
                'email' => $validate['email'],
                'message' => $validate['message']
            ]);
    
            return response()->json([
                'message' => 'Message sent successfully!'
            ],201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => "Validation failed",
                'error' => $e->errors(),
            ],422);
        }

    }


    public function membershipStore(Request $request){
      

        try {
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
    
            return response()->json([
                'message' => 'Application sent successfully!'
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => "Validation failed",
                'error' => $e->errors(),
            ], 422);
        }
    }
}
