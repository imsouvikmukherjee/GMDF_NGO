<?php

use App\Http\Controllers\school\dashboardController;
use App\Http\Controllers\school\HeaderFooterController;
use App\Http\Controllers\school\IdCardController;
use App\Http\Controllers\school\MyClassroomController;
use Illuminate\Support\Facades\Route;

Route::middleware(['school', 'verified'])->group(function () {

    Route::get('/school/dashboard', [dashboardController::class, 'schoolDashboard'])->name('school.schoolhome');
    // Route::get('/school/dashboard',[HeaderFooterController::class,'schoolDashboardLogo'])->name('school.schoolhome.logo');
    Route::get('/school/myclassroom', [MyClassroomController::class, 'showMyclassroom'])->name('show.myclassroom');
    Route::get('/school/view-notes/{id}', [MyClassroomController::class, 'viewnotes'])->name('view.notes');
    Route::get('/school/student-idcard',[IdCardController::class,'idcardDisplay'])->name('idcard.display');

    Route::get('/school/view-notes-video/{id}', [MyClassroomController::class, 'viewNotesVideo'])->name('view.notes.video');
    Route::get('/school/student-profile', [MyClassroomController::class, 'studentProfile'])->name('student.profile');
    Route::get('/school/student-result', [MyClassroomController::class, 'studentResult'])->name('student.result');
    Route::get('/school/student-schedule', [MyClassroomController::class, 'studentSchedule'])->name('student.schedule');
    Route::get('/school/student-fees', [MyClassroomController::class, 'studentFees'])->name('student.fees');
    Route::post('/school/student-fees-store', [MyClassroomController::class, 'studentFeesStore'])->name('student.fees.store');
    Route::get('/school/contact', [MyClassroomController::class, 'contactForm'])->name('contact.form');
    Route::post('/school/contact-message-send', [MyClassroomController::class, 'contactSendMessage'])->name('contact.send.message');
});
