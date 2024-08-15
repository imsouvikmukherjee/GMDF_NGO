<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    public function showslider(){
        $records = DB::table('mainslider')->orderBy('id','desc')->paginate(5);
        $title = "NGO | Slider";
        return view('admin.slider',['records' => $records])->with('title',$title);
    }

    public function showMainSliderForm(){
        $title = "NGO | Add Slider";
        return view('admin.add-main-slider')->with('title',$title);
    }

    public function sliderStore(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            // 'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imagename = 'mainslider'.time().'.'.$request->image->extension();
        $request->image->move(public_path('img'),$imagename);


        DB::table('mainslider')->insert([
            'title' => $validate['title'],
            'description' => $request['description'],
            'image' => $imagename
        ]);

        return redirect()->route('show.slider')->with('success','Slider added successfully!');


    }


    public function sliderDelete($id){
        $id = decrypt($id);
        if($id > 0){
            $img = DB::table('mainslider')->where('id',$id)->value('image');
             File::delete(public_path('img').'/'.$img);

         }
        DB::table('mainslider')->where('id',$id)->delete();
        return redirect()->route('show.slider')->with('success','Slider deleted successfully!');
    }

    public function editSlider($id){
        $id = decrypt($id);
        $data = DB::table('mainslider')->find($id);
        $title = "NGO | Update Slider";
        return view('admin.update-main-slider',['data' => $data])->with('title',$title);
    }

    public function editSliderStore(Request $request, $id){
        $id = decrypt($id);

        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if($request->hasfile('image')){

            if($id > 0){
                $img = DB::table('mainslider')->where('id',$id)->value('image');

                if ($request->hasFile('image')) {
                    File::delete(public_path('img').'/'.$img); 
                }
            }

            $imagename = 'mainslider'.time().'.'.$request->image->extension();
            $request->image->move(public_path('img'),$imagename);

        }

        DB::table('mainslider')->where('id',$id)->update([
            'title' => $validate['title'],
            'description' => $request['description'],
            'image' => $imagename
        ]);

        return redirect()->route('show.slider')->with('success','Slider updated successfully!');
    }


    public function changeSliderStatus(Request $request){
        $id = $request->post('id');  
        // dd($id);
         $data = DB::table('mainslider')->where('id',$id)->value('status');

        if ($data == '1'){
            DB::table('mainslider')->where('id',$id)->update([
                'status'=> 0
            ]);
            $status = 0;
        }else{
            DB::table('mainslider')->where('id',$id)->update([
                'status'=> 1
            ]);
            $status = 1;
        }

        return response()->json(['status' => $status]);
    }


    // Gallery section


    public function showGallery(){
        $records = DB::table('gallery')->orderBy('id','desc')->paginate(5);
        $title = "NGO | Gallery";
        return view('admin.gallery',['records' => $records])->with('title',$title);
    }

    public function showGalleryImageForm(){
        $title = "NGO | Add Gallery Image";
        return view('admin.add-gallery-image')->with('title',$title);
    }

    public function addGalleryImage(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imagename = 'gallery'.time().'.'.$request->image->extension();
        $request->image->move(public_path('img'),$imagename);


        DB::table('gallery')->insert([
            'title' => $validate['title'],
            'image' => $imagename
        ]);

        return redirect()->route('show.gallery')->with('success','Image added successfully!');
    }


    public function imageDelete($id){
        $id = decrypt($id);

        if($id > 0){
            $img = DB::table('gallery')->where('id',$id)->value('image');
             File::delete(public_path('img').'/'.$img);

         }

        DB::table('gallery')->where('id',$id)->delete();
        return redirect()->route('show.gallery')->with('success','Image deleted successfully!');
    }

    public function imageEdit($id){
        $id = decrypt($id);
        $title = "NGO | Update Gallery";
        $data = DB::table('gallery')->find($id);
        // dd($data);
        return view('admin.update-gallery',['data'=>$data])->with('title',$title);
    }

    public function imageEditStore(Request $request, $id){
        $id = decrypt($id);

        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if($request->hasfile('image')){

            if($id > 0){
                $img = DB::table('gallery')->where('id',$id)->value('image');

                if ($request->hasFile('image')) {
                    File::delete(public_path('img').'/'.$img); 
                }
            }

            $imagename = 'gallery'.time().'.'.$request->image->extension();
            $request->image->move(public_path('img'),$imagename);

        }

        DB::table('gallery')->where('id',$id)->update([
            'title' => $validate['title'],
            'image' => $imagename
        ]);

        return redirect()->route('show.gallery')->with('success','Image updated successfully!');
    }

    public function changeImageStatus(Request $request){
        $id = $request->post('id');  
        // dd($id);
         $data = DB::table('gallery')->where('id',$id)->value('status');

        if ($data == '1'){
            DB::table('gallery')->where('id',$id)->update([
                'status'=> 0
            ]);
            $status = 0;
        }else{
            DB::table('gallery')->where('id',$id)->update([
                'status'=> 1
            ]);
            $status = 1;
        }

        return response()->json(['status' => $status]);
    }
   
}
