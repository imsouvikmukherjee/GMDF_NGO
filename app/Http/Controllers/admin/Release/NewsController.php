<?php

namespace App\Http\Controllers\admin\Release;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{

// Category section

    public function newsCategory(){
        $records = DB::table('newscategory')
        ->select('id', 'categoryname', 'categorydescription', 'status', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS created_date"))
        ->orderBy('id', 'desc')
        ->paginate(5);

    $title = "NGO | Category";
        return view('admin.news-category',['records'=>$records])->with('title',$title);
    }

    public function showAddCategoryForm(){
        $title = "NGO | Add Category";
        return view('admin.add-category')->with('title',$title);
    }

    public function addCategory(Request $request){
        $validate = $request->validate([
            'categoryname' => 'required|string',
            'categorydescription' => 'required|string'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('newscategory')->insert([
            'categoryname' => $validate['categoryname'],
            'categorydescription' => $validate['categorydescription'],
            'created_at' => $currentDate
        ]);

        return redirect()->route('news.category')->with('success','Category added successfully!');
    }


    public function showUpdateCategoryForm($id){
         $id = decrypt($id);
         $data = DB::table('newscategory')->find($id);
         return view('admin.edit-category',['data'=>$data])->with('title','NGO | Update Category');
    }   

    public function updateCategoryStore(Request $request, $id){
        
        $id = decrypt($id);

        $validate = $request->validate([
            'categoryname' => 'required|string',
            'categorydescription' => 'required|string'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        DB::table('newscategory')->where('id',$id)->update([
            'categoryname' => $validate['categoryname'],
            'categorydescription' => $validate['categorydescription'],
            'updated_at' => $currentDate
        ]);

        return redirect()->route('news.category')->with('success','Category updated successfuly!');
    }

    public function deleteCategory($id){
        $id = decrypt($id);
        // dd($id);
        DB::table('newscategory')->where('id',$id)->delete();
        return redirect()->route('news.category')->with('success','Category deleted successfully!');

    }

    public function changeCategoryStatus(Request $request){

        
        $id = $request->post('id');  
        $data = DB::table('newscategory')->where('id',$id)->value('status');

        if ($data == '1'){
            DB::table('newscategory')->where('id',$id)->update([
                'status'=> 0
            ]);
            $status = 0;
        }else{
            DB::table('newscategory')->where('id',$id)->update([
                'status'=> 1
            ]);
            $status = 1;
        }

        return response()->json(['status' => $status]);
    }


    // News Section


    public function adminNews(){

        $records = DB::table('news')->select('news.*','newscategory.categoryname')
        ->join('newscategory','news.category_id','=','newscategory.id')->where('newscategory.status',1)->orderBy('news.id','desc')->paginate(5);
        // dd($records);
        $title = "NGO | News";
        return view('admin.news',['records'=>$records])->with('title',$title);
    }

    public function addNews(){
        $categorylist = DB::table('newscategory')->orderBy('id','desc')->get();
        $title = "NGO | Add News";
        return view('admin.add-news',['categorylist' => $categorylist])->with('title',$title);
    }

    public function addNewsStore(Request $request){
        $validate = $request->validate([
            'categoryname' => 'required',
            'newstitle' => 'required|string|max:255',
            'newsdescription' => 'required',
            'newsimage' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $imagename = time().'.'.$request->newsimage->extension();
        $request->newsimage->move(public_path('img'),$imagename);

        DB::table('news')->insert([
            'category_id' => $validate['categoryname'],
            'newstitle' => $validate['newstitle'],
            'newsdescription' => $validate['newsdescription'],
            'newsimage' => $imagename,
            'created_at' => $currentDate

        ]);

        return redirect()->route('admin.news')->with('success','News added successfully!');
    }


    public function newsDelete($id){
        $id = decrypt($id);
        if($id > 0){
            $img = DB::table('news')->where('id',$id)->value('newsimage');
             File::delete(public_path('img').'/'.$img);

         }
        DB::table('news')->where('id',$id)->delete();
        return redirect()->route('admin.news')->with('success','News deleted successfully!');
    }


    public function editNews($id){
        $id = decrypt($id);
        $data = DB::table('news')->find($id);
        $newscategory = DB::table('newscategory')->orderBy('id','desc')->get();
        $title = "NGO | Update News";
        return view('admin.update-news',['data'=>$data],['newscategory'=> $newscategory])->with('title',$title);
    }



    public function editNewsStore(Request $request, $id){
        $id = decrypt($id);

        $validate = $request->validate([
            'categoryname' => 'required',
            'newstitle' => 'required|string|max:255',
            'newsdescription' => 'required',
            'newsimage' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        if($request->hasfile('newsimage')){

            if($id > 0){
                $img = DB::table('news')->where('id',$id)->value('newsimage');

                if ($request->hasFile('newsimage')) {
                    File::delete(public_path('img').'/'.$img); 
                }
            }

            $imagename = time().'.'.$request->newsimage->extension();
            $request->newsimage->move(public_path('img'),$imagename);

        }

        DB::table('news')->where('id',$id)->update([
            'category_id' => $validate['categoryname'],
            'newstitle' => $validate['newstitle'],
            'newsdescription' => $validate['newsdescription'],
            'newsimage' => isset($imagename) ? $imagename : $img,
            'updated_at' => $currentDate
        ]);

        return redirect()->route('admin.news')->with('success','News updated successfully!');
    }



    public function showNewsDetails($id){

        $id = decrypt($id);
       
        $data = DB::table('news')
        ->leftJoin('newscategory', 'news.category_id', '=', 'newscategory.id')
        ->select('news.*', 'newscategory.categoryname', 
                 DB::raw("DATE_FORMAT(news.created_at, '%Y-%m-%d') AS created_at"), 
                 DB::raw("DATE_FORMAT(news.updated_at, '%Y-%m-%d') AS updated_at"))
        ->where('news.id', $id)
        ->first();
        
        $title = "NGO | News Details";
        return view('admin.news-details',['data'=>$data])->with('title',$title);
    }


    public function changeNewsStatus(Request $request){
        $id = $request->post('id');  
        // dd($id);
         $data = DB::table('news')->where('id',$id)->value('status');

        if ($data == '1'){
            DB::table('news')->where('id',$id)->update([
                'status'=> 0
            ]);
            $status = 0;
        }else{
            DB::table('news')->where('id',$id)->update([
                'status'=> 1
            ]);
            $status = 1;
        }

        return response()->json(['status' => $status]);
    }

}
