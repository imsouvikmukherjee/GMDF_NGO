<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showAddUserForm(){
        $title = "Add User";
        return view('admin.layout.add-user')->with('title',$title);
    }

    public function adduserStore(Request $request){
        $request->validate([
            'schoolname' => 'required|string|max:255',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact' => ['required','digits:10','unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'usertype' => 'required'
        ]);
        $user = User::create([
            'schoolname' => $request->schoolname,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'usertype' => "School",
            'password' => Hash::make($request->password),
            'usertype' => $request->usertype
        ]);

        return redirect()->route('show.add.user.form')->with('success','User added successfully');

    }

    public function userDetails(){
        $title = "NGO | User Details";

        $schooldata = DB::table('users')->select('id','schoolname','name','email','contact','status','usertype',  DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('usertype','School')->orderBy('id','desc')->get();

        $teacherdata = DB::table('users')->select('id','schoolname','name','email','contact','status','usertype',  DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('usertype','Teacher')->orderBy('id','desc')->get();

        $studentdata = DB::table('users')->select('id','schoolname','name','email','contact','status','usertype',  DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('usertype','Student')->orderBy('id','desc')->get();

        return view('admin.user-details',['schooldata' => $schooldata, 'teacherdata' => $teacherdata, 'studentdata' => $studentdata])->with('title',$title);
    }   
 

    public function schoolDelete($id){
        $id = decrypt($id);

        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('user.details')->with('success','School deleted successfully!');
    }


    public function updateSchoolCredential($id){
        $id = decrypt($id);

        $data = DB::table('users')->where('id',$id)->first();

        $title = "Update Credential | School";
        return view('admin.update-school-credential', ['data' => $data])->with('title',$title);
    }


    public function userCredentialStore(Request $request, $id){
         $id = decrypt($id);

        $validate = $request->validate([
           'contact' => ['required','digits:10','unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        DB::table('users')->where('id',$id)->update([
            'contact' => $validate['contact'],
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.details')->with('success','School updated successfully!');

    }
}
