<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{url('admin-asset/img/logo/logo.png')}}" rel="icon">
  <title>{{$title}}</title>
  <link href="{{url('admin-asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('admin-asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('admin-asset/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    .navbar{
      background-color:#090099; 

    }

    #tabContainer {
	width:100%;
	padding:8px;
	background-color:white;
	-moz-border-radius: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
}

#tabs{
  width: 100%;
	height:30px;
	overflow:hidden;
}

#tabs > ul{
	list-style:none;
}

#tabs > ul > li{
	font-size: .75rem;
	margin:0 2px 0 0;
	padding:6px 10px;
	display:block;
	float:left;
	color:#FFF;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
	-moz-border-radius-topleft: 4px;
	-moz-border-radius-topright: 4px;
	-moz-border-radius-bottomright: 0px;
	-moz-border-radius-bottomleft: 0px;
	border-top-left-radius:4px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px; 
	background: #C9C9C9; /* old browsers */
	background: -moz-linear-gradient(top, #0C91EC 0%, #257AB6 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0C91EC), color-stop(100%,#257AB6)); webkit
}

#tabs > ul > li:hover{
	background: #FFFFFF; old browsers
	background: -moz-linear-gradient(top, #FFFFFF 0%, #F3F3F3 10%, #F3F3F3 50%, #FFFFFF 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(10%,#F3F3F3), color-stop(50%,#F3F3F3), color-stop(100%,#FFFFFF)); /* webkit */
	cursor:pointer;
	color: #333;
}

#tabs > ul > li.tabActiveHeader{
	background: #FFFFFF; /* old browsers */
	background: -moz-linear-gradient(top, #FFFFFF 0%, #F3F3F3 10%, #F3F3F3 50%, #FFFFFF 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(10%,#F3F3F3), color-stop(50%,#F3F3F3), color-stop(100%,#FFFFFF)); /* webkit */
	cursor:pointer;
	color: #333;
}

#tabscontent {
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 4px;
	-moz-border-radius-bottomright: 4px;
	-moz-border-radius-bottomleft: 4px;
	border-top-left-radius: 0px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 4px;
	border-bottom-left-radius: 4px; 
	padding:10px 10px 25px;
	background: #FFFFFF; /* old browsers */
	background: -moz-linear-gradient(top, #FFFFFF 0%, #FFFFFF 90%, #e4e9ed 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(90%,#FFFFFF), color-stop(100%,#e4e9ed)); /* webkit */
	margin:0;
	color:#333;
}

#preview-button {
	display: none;
}
</style>

</head>

<body id="page-top">
  <div id="wrapper">
   

    @if (session('usertype') === 'Superadmin')
           <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}" style="background-color: #090099;">
        <div class="sidebar-brand-icon border">
          <img src="{{url('admin-asset/img/logo/logo.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">GMDF | NGO</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        GMDF | NGO
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          
          <span>Media</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="{{route('show.slider')}}">Main Slider</a>
            <a class="collapse-item" href="{{route('show.gallery')}}">Gallery</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>School</span>
        </a>
      </li>

    


      {{-- @if(session('usertype') === 'School')
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Hello</span>
        </a> 
      </li>
  @endif --}}
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Release</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="{{route('news.category')}}">News Category</a>
            <a class="collapse-item" href="{{route('admin.news')}}">News</a>
            <a class="collapse-item" href="{{route('ngo.fundrising')}}">Crowdfunding Post</a>
            <a class="collapse-item" href="{{route('crowdfunding.application')}}">Crowdfunding Application</a>
            <a class="collapse-item" href="{{route('ngo.notice')}}">Notice</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('ngo.contact.message')}}">
          <i class="bi bi-chat-dots-fill"></i>
          <span>Contact Messages</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('ngo.membership')}}">
          <i class="bi bi-person-check-fill"></i>
          <span>Membership</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('ngo.setting')}}">
          <i class="fas fa-cogs fa-sm fa-fw"></i>
          <span>Setting</span>
        </a>
      </li>
      {{-- <hr class="sidebar-divider">
      <div class="sidebar-heading">
        School | Admin
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
        
            <a class="collapse-item" href="{{route('school.notice')}}">Notice</a>
            <a class="collapse-item" href="{{route('manage.school')}}">School Details</a>
            <a class="collapse-item" href="{{route('school.teacher')}}">Teachers</a>
            <a class="collapse-item" href="{{route('school.class')}}">Class</a>
            <a class="collapse-item" href="{{route('school.section')}}">Section</a>
            <a class="collapse-item" href="{{route('school.students')}}">Students</a>
            <a class="collapse-item" href="{{route('school.subject')}}">Subjects</a>
            <a class="collapse-item" href="{{route('school.notes')}}">Notes</a>
            <a class="collapse-item" href="{{route('school.schedule')}}">Schedule</a>
            <a class="collapse-item" href="{{route('school.result')}}">Result</a>
            <a class="collapse-item" href="{{route('school.fees')}}">Student Fees</a>
          
        </div>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('school.contact')}}">
          <i class="bi bi-chat-dots-fill"></i>
          <span>Contact Message</span>
        </a>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('bank.details')}}">
          <i class="bi bi-bank2"></i>
          <span>Bank Details</span>
        </a>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('show.add.user.form')}}">
          <i class="bi bi-person-check-fill"></i>
          <span>Add User</span>
        </a>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('school.setting')}}">
          <i class="fas fa-cogs fa-sm fa-fw"></i>
          <span>Setting</span>
        </a>
      </li> --}}
     
    </ul>
    <!-- Sidebar -->
    @endif


    @if (session('usertype') === "School")
         <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}" style="background-color: #090099;">
        <div class="sidebar-brand-icon border">
          <img src="{{url('admin-asset/img/logo/logo.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">GMDF | NGO</div>
      </a>
     
      <div class="sidebar-heading mt-4">
        School | Admin
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
        
            <a class="collapse-item" href="{{route('school.notice')}}">Notice</a>
            <a class="collapse-item" href="{{route('manage.school')}}">School Details</a>
            <a class="collapse-item" href="{{route('school.teacher')}}">Teachers</a>
            <a class="collapse-item" href="{{route('school.class')}}">Class</a>
            <a class="collapse-item" href="{{route('school.section')}}">Section</a>
            <a class="collapse-item" href="{{route('school.students')}}">Students</a>
            <a class="collapse-item" href="{{route('school.subject')}}">Subjects</a>
            <a class="collapse-item" href="{{route('school.notes')}}">Notes</a>
            <a class="collapse-item" href="{{route('school.schedule')}}">Schedule</a>
            <a class="collapse-item" href="{{route('school.result')}}">Result</a>
            <a class="collapse-item" href="{{route('school.fees')}}">Student Fees</a>
          
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('school.contact')}}">
          <i class="bi bi-chat-dots-fill"></i>
          <span>Contact Message</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('bank.details')}}">
          <i class="bi bi-bank2"></i>
          <span>Bank Details</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('show.add.user.form')}}">
          <i class="bi bi-person-check-fill"></i>
          <span>Add User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('school.setting')}}">
          <i class="fas fa-cogs fa-sm fa-fw"></i>
          <span>Setting</span>
        </a>
      </li>
     
    </ul>
    <!-- Sidebar -->
    @endif


    @if (session('usertype') === 'Teacher')
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}" style="background-color: #090099;">
        <div class="sidebar-brand-icon border">
          <img src="{{url('admin-asset/img/logo/logo.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">GMDF | NGO</div>
      </a>
     
      <div class="sidebar-heading mt-4">
        School | Teacher
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
        
            <a class="collapse-item" href="{{route('school.notice')}}">Notice</a>
           
            <a class="collapse-item" href="{{route('school.class')}}">Class</a>
            <a class="collapse-item" href="{{route('school.section')}}">Section</a>
            <a class="collapse-item" href="{{route('school.students')}}">Students</a>
            <a class="collapse-item" href="{{route('school.subject')}}">Subjects</a>
            <a class="collapse-item" href="{{route('school.notes')}}">Notes</a>
            <a class="collapse-item" href="{{route('school.schedule')}}">Schedule</a>
            <a class="collapse-item" href="{{route('school.result')}}">Result</a>
            <a class="collapse-item" href="{{route('school.fees')}}">Student Fees</a>
          
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('school.contact')}}">
          <i class="bi bi-chat-dots-fill"></i>
          <span>Contact Message</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('show.add.user.form')}}">
          <i class="bi bi-person-check-fill"></i>
          <span>Add User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('school.setting')}}">
          <i class="fas fa-cogs fa-sm fa-fw"></i>
          <span>Setting</span>
        </a>
      </li>
     
    </ul>
    <!-- Sidebar -->
    @endif

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand  topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{url('admin-asset/img/boy.png')}}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{session('name')}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                {{-- <a class="dropdown-item" href="{{route('admin.profile')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> --}}
              
                <div class="dropdown-divider"></div>
              
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  {{-- <x-dropdown-link :href="">
                      {{ __('Log Out') }}
                  </x-dropdown-link> --}}

                  <a class="dropdown-item" href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
              </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->