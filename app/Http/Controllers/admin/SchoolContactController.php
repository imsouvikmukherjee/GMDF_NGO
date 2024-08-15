<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SchoolContactController extends Controller
{
    public function schoolContact()
    {
        $title = "School | Contact";

        $contactdetails = DB::table('schoolcontact')
            ->join('users', 'schoolcontact.school', '=', 'users.id')
            ->select('schoolcontact.*', DB::raw("DATE_FORMAT(schoolcontact.created_at, '%Y-%m-%d') AS created_at"), 'users.schoolname')
            ->where('users.schoolname', Session::get('schoolname'))
            ->orderBy('schoolcontact.id', 'desc')->paginate(5);

        return view('admin.school-contact-message', ['contactdetails' => $contactdetails])->with('title', $title);
    }

    public function schoolContactDelete($id)
    {
        $id = decrypt($id);
        DB::table('schoolcontact')->where('id', $id)->delete();
        return redirect()->route('school.contact')->with('success', 'Record deleted successfully!');
    }
}
