<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ManageSchoolController extends Controller
{
    public function manageSchool(){
        $title = "School | Manage School";
        $data = DB::table('schooldetails')
        ->leftJoin('users', 'schooldetails.school_name', '=', 'users.id')
        ->select('schooldetails.*', 'users.*', 
                'schooldetails.id as schooldetails_id',
                 DB::raw("DATE_FORMAT(schooldetails.created_at, '%Y-%m-%d') AS created_at"), 
                 DB::raw("DATE_FORMAT(schooldetails.updated_at, '%Y-%m-%d') AS updated_at"))
        ->where('users.usertype', 'school')
        ->where('users.schoolname', Session::get('schoolname'))
        ->first();

        // $data = DB::table('schooldetails')->
        return view('admin.manage-school',['data' => $data])->with('title',$title);
    }

    public function addSchoolDetails(){
        $title = "School | Add School Details";
        $uniqueUsers = DB::table('users')
    ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
    ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
    ->get();
        return view('admin.add-school-details',['uniqueUsers' => $uniqueUsers])->with('title',$title);
    }



    public function schoolDetailsStore(Request $request){

        // dd($request->schoolname);
        // dd($request->session('schoolname'));
        // $schoolname = $request->input('schoolname');
        // dd($schoolname); 


        // dd($request->email);


        $validate = $request->validate([
            'school_name' => 'required|unique:schooldetails',
            'banner' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'about' => 'required',
            // 'showemail' => 'required|email|unique:schooldetails',
            // 'showcontact' => 'required|digits:10|unique:schooldetails',
            'address' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $banner = 'schoolbanner'.time().'.'.$request->banner->extension();
        $request->banner->move(public_path('school_img'),$banner);

        $logo = 'schoollogo'.time().'.'.$request->logo->extension();
        $request->logo->move(public_path('school_img'),$logo);


        // session([
        //     'schoolname' => $request->input('schoolname'),
        //     'email' => $request->input('email'),
        //     'contact' => $request->input('contact')
        // ]);



        // $schoolname = session('schoolname');
        // $email = session('email');
        // $contact = session('contact');

        DB::table('schooldetails')->insert([
            'school_name' => $validate['school_name'],
            'banner' => $banner,
            'logo' => $logo,    
            'about' => $validate['about'],
            'showemail' => $request->email,
            'showcontact' => $request->contact,
            'address' => $validate['address'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('add.school.details')->with('success','Data added successfully!');
    }
    
    // School details page

    public function schoolDetails(){

        // $id = decrypt($id);

        $title = "School | Details";
        $data = DB::table('schooldetails')
        ->leftJoin('users', 'schooldetails.school_name', '=', 'users.id')
        ->select('schooldetails.*', 'users.*', 
                 DB::raw("DATE_FORMAT(schooldetails.created_at, '%Y-%m-%d') AS created_at"), 
                 DB::raw("DATE_FORMAT(schooldetails.updated_at, '%Y-%m-%d') AS updated_at"))
        ->where('users.usertype', 'school')
        ->where('users.schoolname', Session::get('schoolname'))
        // ->where('id',$id)
        ->first();

        return view('admin.school-details-view',['data' => $data])->with('title',$title);
    }

// Edit data

    public function detailsUpdateForm($id){
        $id = decrypt($id);
    
        $title = 'School | Update Details';

        $uniqueUsers = DB::table('users')
        ->select('id','schoolname', 'name', 'email', 'contact', 'password', 'status', 'usertype',  'created_at')
        ->where('status',1)->where('usertype','school')->where('schoolname',session('schoolname'))
        ->get();


        $data = DB::table('schooldetails')
        // ->leftJoin('users', 'schooldetails.school_name', '=', 'users.id')
        ->select('schooldetails.*', 
                'schooldetails.id as schooldetails_id',
                 DB::raw("DATE_FORMAT(schooldetails.created_at, '%Y-%m-%d') AS created_at"), 
                 DB::raw("DATE_FORMAT(schooldetails.updated_at, '%Y-%m-%d') AS updated_at"))
        // ->where('users.usertype', 'school')
        // ->where('users.schoolname', Session::get('schoolname'))
        ->where('schooldetails_status',1)
        ->find($id);

        return view('admin.update-details',['uniqueUsers' => $uniqueUsers, 'data' => $data])->with('title',$title);
 

    }

// Edit store data

    public function detailsUpdateStore(Request $request, $id){
        $id = decrypt($id);
        // dd($request);
        $validate = $request->validate([
            'school_name' => 'required',
            'banner' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'about' => 'required',
            // 'showemail' => 'required|email|unique:schooldetails',
            // 'showcontact' => 'required|digits:10|unique:schooldetails',
            'address' => 'required'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        if($request->hasfile('banner')){

            if($id > 0){
                $img = DB::table('schooldetails')->where('id',$id)->value('banner');

                if ($request->hasFile('banner')) {
                    File::delete(public_path('school_img').'/'.$img); 
                }
            }

            $banner = 'schoolbanner'.time().'.'.$request->banner->extension();
            $request->banner->move(public_path('school_img'),$banner);

        }

       

        if($request->hasfile('logo')){

            if($id > 0){
                $img = DB::table('schooldetails')->where('id',$id)->value('logo');

                if ($request->hasFile('logo')) {
                    File::delete(public_path('school_img').'/'.$img); 
                }
            }

            $logo = 'schoollogo'.time().'.'.$request->logo->extension();
            $request->logo->move(public_path('school_img'),$logo);

        }

        
        

        DB::table('schooldetails')->where('id',$id)->update([
            'school_name' => $validate['school_name'],
            'banner' => $banner,
            'logo' => $logo,    
            'about' => $validate['about'],
            'showemail' => $request->email,
            'showcontact' => $request->contact,
            'address' => $validate['address'],
            'updated_at' => $currentDate
        ]);

        return redirect()->route('manage.school')->with('success','Data updated successfully!');

    }
   
}
