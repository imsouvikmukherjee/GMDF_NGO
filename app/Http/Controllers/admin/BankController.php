<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class BankController extends Controller
{
    public function bankDetails()
    {
        $title = "Shool | Bank Details";

        $schoollist = DB::table('users')
            ->select('id', 'schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
            ->where('status', 1)->where('usertype', 'school')->where('schoolname', session('schoolname'))
            ->get();



        return view('admin.school-bank-details', ['schoollist' => $schoollist])->with('title', $title);
    }


    public function bankDetailsStore(Request $request)
    {
        $validate = $request->validate([
            'school' => 'required|unique:schoolbankdetails',
            'bank_name' => 'required',
            'account_number' => 'required|unique:schoolbankdetails',
            'ifsc_code' => 'required',
            'branch' => 'required',
            'account_holder_name' => 'required|string',
            'upi_id' => 'required|unique:schoolbankdetails',
            'qr_code' => 'required|image|mimes:png,jpg,jpeg|max:2048'

        ]);

        $qr_code = 'school_qr_code' . time() . '.' . $request->qr_code->extension();
        $request->qr_code->move(public_path('otherstoredfiles'), $qr_code);

        DB::table('schoolbankdetails')->insert([
            'school' => $validate['school'],
            'bank_name' => $validate['bank_name'],
            'account_number' => $validate['account_number'],
            'ifsc_code' => $validate['ifsc_code'],
            'branch' => $validate['branch'],
            'account_holder_name' => $validate['account_holder_name'],
            'upi_id' => $validate['upi_id'],
            'qr_code' => $qr_code
        ]);

        return redirect()->route('bank.details')->with('success', 'Bank added successfully!');
    }

    public function bankDetailsView()
    {
        $title = "School | Bank Details";

        $records = DB::table('schoolbankdetails')
            ->join('users', 'schoolbankdetails.school', '=', 'users.id')
            ->select('schoolbankdetails.*', 'users.schoolname', 'users.id AS userid')
            ->where('users.schoolname', Session::get('schoolname'))
            ->first();

        return view('admin.bank-details-view', ['records' => $records])->with('title', $title);
    }


    public function bankDetailsRemove($id)
    {
        $id = decrypt($id);

        if ($id > 0) {
            $qr_code = DB::table('schoolbankdetails')->where('id', $id)->value('qr_code');
            File::delete(public_path('otherstoredfiles') . '/' . $qr_code);
        }

        DB::table('schoolbankdetails')->where('id', $id)->delete();
        return redirect()->route('bank.details.view')->with('success', 'Record deleted successfully!');
    }
}
