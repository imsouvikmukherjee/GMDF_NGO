<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function showGalleryPage(){
        $title = "NGO | Gallery";
        $gallery = DB::table('gallery')->where('status',1)->orderBy('id','desc')->paginate(6);

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.gallery',['gallery' => $gallery, 'settingdata' => $settingdata])->with('title',$title);
    }
}
