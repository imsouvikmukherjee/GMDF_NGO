<?php

use App\Http\Controllers\admin\BankController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\MembershipController;
use App\Http\Controllers\admin\NgoContactController;
use App\Http\Controllers\admin\NGOSchoolConntroller;
use App\Http\Controllers\admin\NgoSettingController;
use App\Http\Controllers\admin\pages\AdminFeesController;
use App\Http\Controllers\admin\pages\ClassController;
use App\Http\Controllers\admin\pages\ManageSchoolController;
use App\Http\Controllers\admin\pages\NotesControllers;
use App\Http\Controllers\admin\pages\ResultController;
use App\Http\Controllers\admin\pages\ScheduleController;
use App\Http\Controllers\admin\pages\SchoolNoticeController;
use App\Http\Controllers\admin\pages\SectionController;
use App\Http\Controllers\admin\pages\StudentController;
use App\Http\Controllers\admin\pages\SubjectController;
use App\Http\Controllers\admin\pages\TeacherController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\Release\FundrisingController;
use App\Http\Controllers\admin\Release\NewsController;
use App\Http\Controllers\admin\Release\NoticeController;
use App\Http\Controllers\admin\SchoolContactController;
use App\Http\Controllers\admin\SchoolSettingController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// NGO section

// Media Section
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['admin', 'verified'])->group(function () {

        Route::get('admin/register', [RegisteredUserController::class, 'create'])
            ->name('register');

        Route::post('admin/register', [RegisteredUserController::class, 'store'])->name('register.store');


        Route::get('/admin/add-user', [UserController::class, 'showAddUserForm'])->name('show.add.user.form');
        Route::post('/admin/add-user', [UserController::class, 'adduserStore'])->name('add.user.store');
        Route::get('/admin/school/school-delete/{id}', [UserController::class, 'schoolDelete']);

        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/show-slider', [MediaController::class, 'showslider'])->name('show.slider');
        Route::get('/admin/add-main-slider', [MediaController::class, 'showMainSliderForm'])->name('show.main.slider.form');
        Route::post('/admin/add-main-slider', [MediaController::class, 'sliderStore'])->name('slider.store');
        Route::get('/admin/slider-delete/{id}', [MediaController::class, 'sliderDelete']);
        Route::get('/admin/slider-edit/{id}', [MediaController::class, 'editSlider'])->name('edit.slider');
        Route::post('/admin/edit-slider-store/{id}', [MediaController::class, 'editSliderStore'])->name('edit.slider.store');
        Route::post('/admin/change-slider-status', [MediaController::class, 'changeSliderStatus']);

        Route::get('/admin/gallery', [MediaController::class, 'showGallery'])->name('show.gallery');
        Route::get('admin/add-gallery-image', [MediaController::class, 'showGalleryImageForm'])->name('show.galleryimage.form');
        Route::post('/admin/add-gallery-image', [MediaController::class, 'addGalleryImage'])->name('add.gallery.image');
        Route::get('/admin/gallery-delete/{id}', [MediaController::class, 'imageDelete']);
        Route::get('/admin/image-edit/{id}', [MediaController::class, 'imageEdit']);
        Route::post('/admin/edit-image-store/{id}', [MediaController::class, 'imageEditStore']);
        Route::post('/admin/change-image-status', [MediaController::class, 'changeImageStatus']);

        Route::get('/admin/School', [NGOSchoolConntroller::class, 'NGOSchool'])->name('NGO.school');
        Route::get('/admin/add-school-credential', [NGOSchoolConntroller::class, 'addSchoolCredential'])->name('add.school.credential');
        Route::get('/admin/school-details-view', [NGOSchoolConntroller::class, 'schoolDetailsView'])->name('school.details.view');


        Route::get('/admin/user-details', [UserController::class, 'userDetails'])->name('user.details');

        Route::get('/admin/school/edit-school-credential/{id}', [UserController::class, 'updateSchoolCredential'])->name('update.school.credential');
        Route::post('/admin/school/update-credential-store/{id}', [UserController::class, 'userCredentialStore']);
        // Release Section Routes


        Route::get('/admin/news-category', [NewsController::class, 'newsCategory'])->name('news.category');
        Route::get('/admin/add-category', [NewsController::class, 'showAddCategoryForm'])->name('show.add.category.form');
        Route::post('admin/add-category', [NewsController::class, 'addCategory'])->name('add.category');
        Route::get('/admin/edit-category/{id}', [NewsController::class, 'showUpdateCategoryForm'])->name('show.update.form');
        Route::post('/admin/edit-category-store/{id}', [NewsController::class, 'updateCategoryStore'])->name('update.category.store');
        Route::get('/admin/delete-category/{id}', [NewsController::class, 'deleteCategory'])->name('delete.category');
        Route::post('admin/change-category-status', [NewsController::class, 'changeCategoryStatus'])->name('change.category.status');

        Route::get('/admin/news', [NewsController::class, 'adminNews'])->name('admin.news');
        Route::get('/admin/add-news', [NewsController::class, 'addNews'])->name('add.news');
        Route::post('/admin/add-news', [NewsController::class, 'addNewsStore'])->name('add.news.store');
        Route::get('/admin/news-delete/{id}', [NewsController::class, 'newsDelete'])->name('news.delete');
        Route::get('/admin/edit-news/{id}', [NewsController::class, 'editNews'])->name('edit.news');
        Route::post('/admin/edit-news-store/{id}', [NewsController::class, 'editNewsStore'])->name('edit.news.store');
        Route::get('/admin/news-details/{id}', [NewsController::class, 'showNewsDetails'])->name('show.news.details');
        Route::post('admin/change-news-status', [NewsController::class, 'changeNewsStatus'])->name('change.news.status');

        Route::get('/admin/fundrising', [FundrisingController::class, 'ngoFundrising'])->name('ngo.fundrising');
        Route::get('/admin/add-fundrising', [FundrisingController::class, 'showFundrisingForm'])->name('show.fundrising.form');
        Route::post('/admin/add-fundrising', [FundrisingController::class, 'fundrisingStore'])->name('fundrising.store');
        Route::get('/admin/edit-fundrising/{id}', [FundrisingController::class, 'editFundrising']);
        Route::post('/admin/update-fundrising-store/{id}', [FundrisingController::class, 'editFundrisingStore']);
        Route::get('/admin/fundrising-delete/{id}', [FundrisingController::class, 'fundrisingDelete']);
        Route::post('/admin/change-fundrising-status', [FundrisingController::class, 'changeFundrisingStatus']);
        Route::get('/admin/fundrising-details/{id}', [FundrisingController::class, 'fundrisingDetails'])->name('fundrising.details');
        Route::get('/admin/crowdfunding-application',[FundrisingController::class,'crowdfundingApplication'])->name('crowdfunding.application');

        Route::get('/admin/notice', [NoticeController::class, 'ngoNotice'])->name('ngo.notice');
        Route::get('/admin/add-notice', [NoticeController::class, 'addNotice'])->name('ngo.add.notice');
        Route::post('/admin/add-notice', [NoticeController::class, 'addNoticeStore'])->name('add.notice.store');
        Route::get('/admin/ngo-notice-delete/{id}', [NoticeController::class, 'ngoNoticeDelete']);
        Route::get('/admin/edit-ngo-notice/{id}', [NoticeController::class, 'editNgoNotice']);
        Route::post('/admin/update-notice-store/{id}', [NoticeController::class, 'editNgoNoticeStore']);

        //Contact Message Routes

        Route::get('/admin/contact-message', [NgoContactController::class, 'contactMessage'])->name('ngo.contact.message');
        Route::get('/admin/delete-contact/{id}', [NgoContactController::class, 'deleteContact']);

        // Membership Routes

        Route::get('/admin/membership', [MembershipController::class, 'ngoMembership'])->name('ngo.membership');
        Route::get('/admin/membership-delete/{id}', [MembershipController::class, 'membershipDelete']);
        Route::get('/admin/membership-details/{id}', [MembershipController::class, 'membershipDetails'])->name('membership.details');

        // NGO Setting Routes

        Route::get('/admin/setting', [NgoSettingController::class, 'ngoSetting'])->name('ngo.setting');
        Route::post('/admin/ngo-setting-update/{id}', [NgoSettingController::class, 'updateStore']);

        // Start School Routes

        // Pages Routes

        Route::get('/admin/school/notice', [SchoolNoticeController::class, 'schoolNotice'])->name('school.notice');
        Route::get('/admin/school/add-school-notice', [SchoolNoticeController::class, 'addSchoolNotice'])->name('add.school.notice');
        Route::post('/admin/school/add-school-notice-store', [SchoolNoticeController::class, 'addSchoolNoticeStore'])->name('add.school.notice.store');
        Route::get('/admin/school/notice-delete/{id}', [SchoolNoticeController::class, 'deleteSchoolNotice'])->name('delete.school.notice');
        Route::get('/admin/school/edit-notice/{id}', [SchoolNoticeController::class, 'editNotice'])->name('edit.notice');
        Route::post('/admin/school/edit-notice-store/{id}', [SchoolNoticeController::class, 'editNoticeStore'])->name('edit.notice.store');

        Route::get('/admin/school/manage-school', [ManageSchoolController::class, 'manageSchool'])->name('manage.school');
        Route::get('/admin/school/add-school-details', [ManageSchoolController::class, 'addSchoolDetails'])->name('add.school.details');
        Route::post('/admin/school/add-school-details', [ManageSchoolController::class, 'schoolDetailsStore'])->name('school.details.store');
        Route::get('/admin/school/school-details', [ManageSchoolController::class, 'schoolDetails'])->name('school.details');
        // Route::get('/admin/school/details-delete/{id}',[ManageSchoolController::class,'dataDelete']);
        Route::get('/admin/school/update-details/{id}', [ManageSchoolController::class, 'detailsUpdateForm'])->name('details.update.form');
        Route::post('/admin/school/details-update-store/{id}', [ManageSchoolController::class, 'detailsUpdateStore']);

        Route::get('/admin/school/teacher', [TeacherController::class, 'schoolTeacher'])->name('school.teacher');
        Route::get('/admin/school/add-teacher-credential', [TeacherController::class, 'addTeacherCredential'])->name('add.teacher.credential');
        Route::get('/admin/school/teacher-details/{id}', [TeacherController::class, 'teacherDetails'])->name('teacher.details');
        Route::get('/admin/school/add-teacher-details', [TeacherController::class, 'addTeacherDetails'])->name('add.teacher.details');
        Route::post('/admin/school/add-teacher-details-store', [TeacherController::class, 'addTeacherDetailsStore'])->name('add.teacher.details.store');
        Route::get('/admin/school/teacher-delete/{id}', [TeacherController::class, 'teacherDelete']);
        Route::get('/admin/school/update-teacher/{id}', [TeacherController::class, 'teacherUpdateForm']);
        Route::post('/admin/school/update-teacher-store/{id}', [TeacherController::class, 'updateTeacherStore']);


        Route::get('/admin/school/school-class', [ClassController::class, 'schoolClass'])->name('school.class');
        Route::get('/admin/school/add-school-class', [ClassController::class, 'addSchoolClass'])->name('add.school.class');
        Route::post('/admin/school/add-school-class', [ClassController::class, 'addClassStore'])->name('add.class.store');
        Route::get('/admin/school/class-delete/{id}', [ClassController::class, 'classDelete']);

        Route::get('/admin/school/school-section', [SectionController::class, 'schoolSection'])->name('school.section');
        Route::get('/admin/school/add-school-section', [SectionController::class, 'addSchoolSection'])->name('add.school.section');
        Route::post('/admin/school/add-class-section', [SectionController::class, 'addSectionStore'])->name('add.section.store');
        Route::get('/admin/school/section-delete/{id}', [SectionController::class, 'sectionDelete']);

        Route::get('/admin/school/school-students', [StudentController::class, 'schoolStudents'])->name('school.students');
        Route::get('/admin/school/add-students-credentials', [StudentController::class, 'addStudentCredentials'])->name('add.students.credentials');
        Route::get('/admin/school/student-details/{id}', [StudentController::class, 'studentDetails'])->name('student.details');
        Route::get('/admin/school/add-student-details', [StudentController::class, 'addStudentDetails'])->name('add.student.details');
        Route::post('/admin/school/add-student-details', [StudentController::class, 'studentDetailsStore'])->name('student.details.store');
        Route::get('/admin/school/student-delete/{id}', [StudentController::class, 'studentDelete']);
        Route::get('/admin/school/student-details/{id}', [StudentController::class, 'studentDetails'])->name('student.details');
        Route::get('/admin/school/student-update/{id}', [StudentController::class, 'studentUpdateForm'])->name('student.update.form');
        Route::post('/admin/school/student-update-store/{id}', [StudentController::class, 'studentUpdateStore'])->name('student.update.store');
        // Route::get('/admin/school/student-search',[StudentController::class,'studentSearch'])->name('student.search');

        Route::get('/admin/school/subjects', [SubjectController::class, 'schoolSubject'])->name('school.subject');
        Route::get('/admin/school/add-subjects', [SubjectController::class, 'addSubject'])->name('add.subject');
        Route::post('/admin/school/add-subjects-store', [SubjectController::class, 'addSubjectStore'])->name('add.subject.store');
        Route::get('/admin/school/subject-delete/{id}', [SubjectController::class, 'subjectDelete']);
        Route::get('/admin/school/subject-update/{id}', [SubjectController::class, 'subjectUpdateForm']);
        Route::post('admin/school/update-subject-store/{id}', [SubjectController::class, 'subjectUpdateStore']);

        Route::get('/admin/school/notes', [NotesControllers::class, 'schoolNotes'])->name('school.notes');
        Route::get('/admin/school/add-notes', [NotesControllers::class, 'addNotes'])->name('add.notes');
        Route::post('/admin/school/add-notes-store', [NotesControllers::class, 'addNotesStore'])->name('add.notes.store');
        Route::get('/admin/school/notes-video/{id}', [NotesControllers::class, 'notesVideo'])->name('notes.video');
        Route::get('/admin/school/deletenote/{id}', [NotesControllers::class, 'deleteNote']);

        Route::get('/admin/school/schedule', [ScheduleController::class, 'schoolSchedule'])->name('school.schedule');
        Route::get('/admin/school/add-schedule', [ScheduleController::class, 'addSchedule'])->name('add.schedule');
        Route::post('/admin/school/add-schedule-store', [ScheduleController::class, 'addScheduleStore'])->name('add.schedule.store');
        Route::get('/admin/school/delete-schedule/{id}', [ScheduleController::class, 'scheduleDelete']);

        Route::get('/admin/school/result', [ResultController::class, 'schoolResult'])->name('school.result');
        Route::get('/admin/school/add-result', [ResultController::class, 'addResult'])->name('add.result');
        Route::post('/admin/school/result-store', [ResultController::class, 'addResultStore'])->name('add.result.store');
        Route::get('admin/school/delete-result/{id}', [ResultController::class, 'resultDelete']);

        Route::get('/admin/school/fees', [AdminFeesController::class, 'schoolFees'])->name('school.fees');
        Route::get('/admin/school/fees-delete/{id}', [AdminFeesController::class, 'feesDelete']);

        Route::get('/admin/school/school-contact', [SchoolContactController::class, 'schoolContact'])->name('school.contact');
        Route::get('/admin/school/contact-message-delete/{id}', [SchoolContactController::class, 'schoolContactDelete']);

        Route::get('/admin/school/bank-details', [BankController::class, 'bankDetails'])->name('bank.details');
        Route::post('/admin/school/bank-details-store', [BankController::class, 'bankDetailsStore'])->name('bank.details.store');
        Route::get('/admin/school/bank-details-view', [BankController::class, 'bankDetailsView'])->name('bank.details.view');
        Route::get('/admin/school/bank-details-delete/{id}', [BankController::class, 'bankDetailsRemove']);

        Route::get('/admin/school/school-setting', [SchoolSettingController::class, 'schoolSetting'])->name('school.setting');
        Route::post('/admin/school/school-setting-store', [SchoolSettingController::class, 'schoolSettingStore'])->name('school.setting.store');
        Route::get('/admin/school/school-setting-view', [SchoolSettingController::class, 'schoolSettingView'])->name('school.setting.view');
        Route::get('/admin/school/school-setting-delete/{id}', [SchoolSettingController::class, 'schoolSettingViewDelete']);

        Route::get('/admin/profile', [ProfileController::class, 'adminProfile'])->name('admin.profile');
    });
});
