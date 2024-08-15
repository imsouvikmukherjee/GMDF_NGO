<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class NotesControllers extends Controller
{
    public function schoolNotes(){
        $title = "School | Notes";

        $noteslist = DB::table('notes')->join('schoolsubjects','notes.subject','=','schoolsubjects.id')
        ->join('schoolclass','notes.class','=','schoolclass.id')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('notes.*','schoolsubjects.subject','schoolclass.class','users.schoolname')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('notes.id','desc')->paginate(5);

        return view('admin.school-notes', ['noteslist' => $noteslist])->with('title',$title);
    }

    public function addNotes(){
        $title = "School | Add Notes";
        
        $subjectlist = DB::table('schoolsubjects')
        ->join('users','schoolsubjects.school','=','users.id')
        ->select('schoolsubjects.*','users.schoolname')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')->get();

        $classlist = DB::table('schoolclass')
        ->join('users','schoolclass.user_id','=','users.id')
        ->select('schoolclass.*','users.schoolname')
        ->where('schoolname',Session::get('schoolname'))
        ->orderBy('id','desc')->get();

        return view('admin.add-notes', ['subjectlist' => $subjectlist, 'classlist' => $classlist])->with('title',$title);
    }

    public function addNotesStore(Request $request){
        $validate = $request->validate([
            'subject' => 'required',
            'class' => 'required',
            'title' => 'required|string',
            'notes_pdf' => 'file|mimes:pdf|max:2048',
            'notes_video' => 'file|mimes:mp4,mov,ogg,AVI,qt,MKV'
        ]);

        $currentDate = Carbon::now()->format('Y-m-d');

        $notes_pdf = null;
        $notes_video = null;

        if($request->notes_pdf != null){
            $notes_pdf = 'notes_pdf'.time().'.'.$request->notes_pdf->extension();
            $request->notes_pdf->move(public_path('notesdetails'),$notes_pdf);
        }
       
        if($request->notes_video != null){
        $notes_video = 'notes_video'.time().'.'.$request->notes_video->extension();
        $request->notes_video->move(public_path('notesdetails'),$notes_video);
    }

        DB::table('notes')->insert([
            'subject' => $validate['subject'],
            'class' => $validate['class'],
            'title' => $validate['title'],
            'notes_pdf' => $notes_pdf,
            'notes_video' => $notes_video,
            'created_at' => $currentDate
        ]);

        return redirect()->route('school.notes')->with('success','Notes added successfully');
    }

    public function notesVideo($id){
        $id = decrypt($id);
        $title = "School | Notes Video";
        $data = DB::table('notes')->where('id',$id)->first();
        return view('admin.school-notes-video',['data' => $data])->with('title',$title);
    }


    public function deleteNote($id){
        $id = decrypt($id);

        if($id > 0){
            $notes_pdf = DB::table('notes')->where('id',$id)->value('notes_pdf');
             File::delete(public_path('notesdetails').'/'.$notes_pdf);

         }

         if($id > 0){
            $notes_video = DB::table('notes')->where('id',$id)->value('notes_video');
             File::delete(public_path('notesdetails').'/'.$notes_video);

         }

         DB::table('notes')->where('id',$id)->delete();
         return redirect()->route('school.notes')->with('success','Notes deleted successfully');
    }
}
