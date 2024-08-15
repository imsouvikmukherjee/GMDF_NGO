<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminFeesController extends Controller
{
    public function schoolFees()
    {
        $title = "School | Fees";

        $feesdetails = DB::table('schoolstudentfees')
            ->join('users', 'schoolstudentfees.school', '=', 'users.id')
            ->join('schoolclass', 'schoolstudentfees.class', '=', 'schoolclass.id')
            ->join('schoolsection', 'schoolstudentfees.section', '=', 'schoolsection.id')
            ->select('schoolstudentfees.*', 'users.schoolname', 'schoolclass.class', 'schoolsection.section')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolstudentfees.id', 'desc')->paginate(5);

        return view('admin.school-student-fees', ['feesdetails' => $feesdetails])->with('title', $title);
    }


    public function feesDelete($id)
    {
        $id = decrypt($id);

        if ($id > 0) {
            $paymentrecipt = DB::table('schoolstudentfees')->where('id', $id)->value('paymentrecipt');
            File::delete(public_path('otherstoredfiles') . '/' . $paymentrecipt);
        }

        DB::table('schoolstudentfees')->where('id', $id)->delete();
        return redirect()->route('school.fees')->with('success', 'Record deleted successfully!');
    }
}
