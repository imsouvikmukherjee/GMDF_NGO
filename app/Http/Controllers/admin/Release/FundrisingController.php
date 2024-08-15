<?php

namespace App\Http\Controllers\admin\Release;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FundrisingController extends Controller
{
    public function ngoFundrising(){
        $title = "NGO | Fundrising";

        $records = DB::table('fundrisingpost')
        ->select('id','title','description','price','image','status', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_date"),
        'bank_name','account_number','ifsc_code','branch','account_holders_name','upi_id','qr_code')
        ->orderBy('id','desc')->paginate(5);

        return view('admin.fundrising',['records'=> $records])->with('title',$title);
    }


    public function showFundrisingForm(){
        $title = "NGO | Add Fundrising";
        return view('admin.add-fundrising')->with('title',$title);
    }

    public function fundrisingStore(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'fundgoal' => 'required|numeric|min:1|max:1000000000.00',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required',
            'ifsc_code' => 'required',
            'branch' => 'required|string',
            'account_holders_name' => 'required|string',
            'upi_id' => 'required',
            'qr_code' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $imagename = "fundrising".time().'.'.$request->image->extension();
        $request->image->move(public_path('img'),$imagename);

        $qr_code = "fundrising_qr_code".time().'.'.$request->qr_code->extension();
        $request->qr_code->move(public_path('img'),$qr_code);

        DB::table('fundrisingpost')->insert([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'price' => $validate['fundgoal'],
            'image' => $imagename,
            'bank_name' => $validate['bank_name'],
            'account_number' => $validate['account_number'],
            'ifsc_code' => $validate['ifsc_code'],
            'branch' => $validate['branch'],
            'account_holders_name' => $validate['account_holders_name'],
            'upi_id' => $validate['upi_id'],
            'qr_code' => $qr_code,
            'created_at' => $currentDate
        ]);

        return redirect()->route('ngo.fundrising')->with('success', 'Fundrising post added successfully!');

    }

    public function editFundrising($id){
        $id = decrypt($id);
        $title = "NGO | Update Fundriding Post";
        $data = DB::table('fundrisingpost')->find($id);
        return view('admin.update-fundrising',['data' => $data])->with('title',$title);
    }

    public function editFundrisingStore(Request $request,$id){
        $id = decrypt($id);

        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'fundgoal' => 'required|numeric|min:1|max:1000000000.00',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required',
            'ifsc_code' => 'required',
            'branch' => 'required|string',
            'account_holders_name' => 'required|string',
            'upi_id' => 'required',
            'qr_code' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        if($request->hasfile('image')){

            if($id > 0){
                $img = DB::table('fundrisingpost')->where('id',$id)->value('image');

                if ($request->hasFile('image')) {
                    File::delete(public_path('img').'/'.$img); 
                }
            }

            $imagename = "fundrising".time().'.'.$request->image->extension();
            $request->image->move(public_path('img'),$imagename);

        }

        if($request->hasfile('qr_code')){

            if($id > 0){
                $qr_code = DB::table('fundrisingpost')->where('id',$id)->value('qr_code');

                if ($request->hasFile('qr_code')) {
                    File::delete(public_path('img').'/'.$qr_code); 
                }
            }

            $qr_code = "qr_code_fundrising".time().'.'.$request->qr_code->extension();
            $request->qr_code->move(public_path('img'),$qr_code);

        }

        DB::table('fundrisingpost')->where('id',$id)->update([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'price' => $validate['fundgoal'],
            'image' => $imagename,
            'bank_name' => $validate['bank_name'],
            'account_number' => $validate['account_number'],
            'ifsc_code' => $validate['ifsc_code'],
            'branch' => $validate['branch'],
            'account_holders_name' => $validate['account_holders_name'],
            'upi_id' => $validate['upi_id'],
            'qr_code' => $qr_code,
            'updated_at' => $currentDate
        ]);

        return redirect()->route('ngo.fundrising')->with('success', 'Fundrising post updated successfully!');


    }

    public function fundrisingDelete($id){
        $id = decrypt($id);
        if($id > 0){
            $img = DB::table('fundrisingpost')->where('id',$id)->value('image');
             File::delete(public_path('img').'/'.$img);

         }

        DB::table('fundrisingpost')->where('id',$id)->delete();
        return redirect()->route('ngo.fundrising')->with('success','Fundrising deleted successfully!');
    }


    public function changeFundrisingStatus(Request $request){
        $id = $request->post('id');  
        // dd($id);
         $data = DB::table('fundrisingpost')->where('id',$id)->value('status');

        if ($data == '1'){
            DB::table('fundrisingpost')->where('id',$id)->update([
                'status'=> 0
            ]);
            $status = 0;
        }else{
            DB::table('fundrisingpost')->where('id',$id)->update([
                'status'=> 1
            ]);
            $status = 1;
        }

        return response()->json(['status' => $status]);
    }

    public function fundrisingDetails($id){

        $id = decrypt($id);

        $title = "NGO | Fundrising Details";
        $data = DB::table('fundrisingpost')->select('id','title','description','price','image','status', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_date"), DB::raw("DATE_FORMAT(updated_at, '%Y-%m-%d') AS updated_date"), 'bank_name','account_number','ifsc_code','branch','account_holders_name','upi_id','qr_code')
        ->where('id',$id)->first();
        // dd($data);
        return view('admin.fundrising-details',['data' => $data])->with('title',$title);
    }


    public function crowdfundingApplication(){
        $title = "NGO | Crowdfunding Application";

        return view('admin.fundrising-application')->with('title',$title);
    }
}
