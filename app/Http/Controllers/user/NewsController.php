<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showNewsPage(Request $request){
        $title = "NGO | News";
        // $status = request()->input('status', 1);
   
        // $perPage = 6;
        // if ($status == 0) {
        //     $perPage = 12;
        // }
    
        $records = DB::table('news')
            ->select('news.*', 'newscategory.categoryname', 'newscategory.status', 
                DB::raw("DATE_FORMAT(news.created_at, '%Y-%m-%d') AS created_at"),
                DB::raw("SUBSTRING_INDEX(news.newsdescription, ' ', 10) AS description"))
            ->join('newscategory', 'news.category_id', '=', 'newscategory.id')
            ->where('news.status', 1)
            ->where('newscategory.status',1)
            ->orderBy('news.id', 'desc')
            ->paginate(6);
    
    
        // if ($records->isEmpty() && $records->currentPage() > 1) {
        //     return redirect()->route('user.news', ['status' => $status, 'page' => $records->lastPage()]);
        // }
    
        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.news', ['records' => $records, 'settingdata' => $settingdata])->with('title', $title);
    }
    

    public function showNewsDetails($id){
        $id = decrypt($id);

        $data = DB::table('news')
        ->leftJoin('newscategory', 'news.category_id', '=', 'newscategory.id')
        ->select('news.*', 'newscategory.categoryname', 
                 DB::raw("DATE_FORMAT(news.created_at, '%Y-%m-%d') AS created_at"))
        ->where('news.id', $id)
        ->first();

        $category = DB::table('newscategory')->orderBy('id','desc')->get();
        // dd($category);

        $newslist = DB::table('news')->select('news.*', 
        DB::raw("DATE_FORMAT(news.created_at, '%Y-%m-%d') AS created_at"))->orderBy('id','desc')->where('status',1)->limit(6)->get();

        $title = 'NGO | Read More';

        $settingdata = DB::table('ngosetting')->where('id',1)->first();

        return view('user.news-details',['data' => $data, 'category' => $category, 'newslist' => $newslist, 'settingdata' => $settingdata])->with('title',$title);
    }

    public function categoryNews($id){
        $id = decrypt($id);
        $title = "NGO | News Category";
        $category = DB::table('newscategory')->where('id',$id)->first();

        $records = DB::table('news')
        ->select('news.*', 'newscategory.categoryname', 
            DB::raw("DATE_FORMAT(news.created_at, '%Y-%m-%d') AS created_at"),
            DB::raw("SUBSTRING_INDEX(news.newsdescription, ' ', 10) AS description"))
        ->join('newscategory', 'news.category_id', '=', 'newscategory.id')
        ->where('news.category_id', $category->id)
        ->where('news.status', 1)
        ->where('newscategory.status',1)
        ->orderBy('news.id', 'desc')
        ->paginate(6);

        $settingdata = DB::table('ngosetting')->where('id',1)->first();
        // dd($records);
        return view('user.category-news',['records' => $records, 'settingdata' => $settingdata])->with('title',$title);
    }
}
