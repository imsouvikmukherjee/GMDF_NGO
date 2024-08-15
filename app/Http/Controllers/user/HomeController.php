<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function showHomePage(){
        $title = "NGO | Home";
        $slider = DB::table('mainslider')->where('status',1)->orderBy('id','desc')->get();

        $fundrisingpost = DB::table('fundrisingpost')
        ->select('id','title',DB::raw("SUBSTRING_INDEX(description, ' ', 10) AS description"),'price','image','status', 
        DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at"))
        ->where('status',1)->orderBy('id','desc')->limit(3)->get();

        $news = DB::table('news')
        ->select('news.*', 'newscategory.categoryname', 'newscategory.status', 
            DB::raw("DATE_FORMAT(news.created_at, '%Y-%m-%d') AS created_at"),
            DB::raw("SUBSTRING_INDEX(news.newsdescription, ' ', 10) AS description"))
        ->join('newscategory', 'news.category_id', '=', 'newscategory.id')
        ->where('news.status', 1)
        ->where('newscategory.status',1)
        ->orderBy('news.id', 'desc')
        ->limit(3)->get();

        $notice = DB::table('ngonotice')->orderBy('id','desc')->limit(3)->get();

      $settingdata = DB::table('ngosetting')->where('id',1)->first();
     
        return view('user.index',['slider' => $slider, 'fundrisingpost' => $fundrisingpost, 'news' => $news, 'notice' => $notice, 'settingdata' => $settingdata])->with('title',$title);
    }   

    // public function showUrlHeader(){
    //     $ngosetting = DB::table('ngosetting')->find(1);
    //     return view('user.layout.header',['ngosetting' => $ngosetting]);
    // }

    public function showAboutPage(){
        $title = "NGO | About";

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.about', ['settingdata' => $settingdata])->with('title',$title);
    }
}
