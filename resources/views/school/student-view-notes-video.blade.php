@extends('school.studentlayout.main')

@Section('main-container')


  <div class="b">
    <a href="{{url()->previous()}}" class=" ani-a btn btn-sm btn-light m-5" ><i class="bi bi-arrow-90deg-left"></i> Back</a>
  <h3 class="text-center text-primary my-4">Video Lecture</h3>

  <video src="{{url('notesdetails/'.$notevideo->notes_video)}}" controls class="video"></video>
</div>
</div>

  

 @endsection
