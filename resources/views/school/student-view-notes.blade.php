@extends('school.studentlayout.main')

@Section('main-container')



  <div class="container" id="view-notes-table">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-center text-primary my-4">View Notes</h3>
        @if ($notes->isEmpty())
    <p class="text-center text-muted my-5">No notes have been released yet</p>
    @else
   

        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
              {{-- <h5 class="text-left">Responsible Teacher : {{$subject_teacher->name}}</h5> --}}
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
          </div>
        </div>

<table class="table table-striped  table-sm mt-5">
 
    <thead >
      <tr >
        <th >Sr no.</th>
        <th>Subject</th>
        <th>Note Title</th>
        <th>Class</th>
        <th>Released_at</th>
        <th>Action</th>
      </tr>
    </thead>

    
    @foreach($notes as $key => $note)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$note->subject}}</td>
      <td>{{$note->title}}</td>
      <td>{{$note->class}}</td>
      <td>{{$note->created_at}}</td>
      <td>

        @if($note->notes_pdf != null)
        <a href="{{url('notesdetails/'.$note->notes_pdf)}}" download class="btn btn-light btn-sm" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View pdf"><i class="bi bi-eye-fill"></i></a>
        @endif

        @if($note->notes_video != null)
        <a href="{{url('/school/view-notes-video')}}/{{encrypt($note->id)}}" class="btn btn-light btn-sm video-button" ><i class="bi bi-play-btn-fill"></i></a>
        @endif
      </td>
    </tr>
   
    @endforeach
    

  </table>
  @endif

  
      </div>
    </div>
  </div>
</div>

  
 @endsection