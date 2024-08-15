<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function adminProfile(){
        $title = "User | Profile";
        return view('admin.profile')->with('title',$title);
    }
}
