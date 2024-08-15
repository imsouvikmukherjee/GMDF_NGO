<?php

namespace App\Http\Controllers\admin\Release;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function ngoNotice(){

        $title = "NGO | Notice";
        $records = DB::table('ngonotice')->select('id','title','description', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_date"))
        ->orderBy('id','desc')->paginate(5);
        return view('admin.notice',['records' => $records])->with('title',$title);
    }

    public function addNotice(){
        $title = "NGO | Add Notice";
        return view('admin.add-notice')->with('title',$title);
    }


    public function addNoticeStore(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('ngonotice')->insert([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('ngo.notice')->with('success','Notice added successfully!');
    }


    public function ngoNoticeDelete($id){
        $id = decrypt($id);

        DB::table('ngonotice')->where('id',$id)->delete();
        return redirect()->route('ngo.notice')->with('success','Notice deleted successfully!');
    }

    public function editNgoNotice($id){
        $id = decrypt($id);
        $data = DB::table('ngonotice')->find($id);
        $title = "NGO | Update Notice";
        return view('admin.update-notice',['data' => $data])->with('title',$title);
    }

    public function editNgoNoticeStore(Request $request, $id){
        $id = decrypt($id);

        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('ngonotice')->where('id',$id)->update([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'updated_at' => $currentDate
        ]);

        return redirect()->route('ngo.notice')->with('success','Notice updated successfully!');
    }
}
