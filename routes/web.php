<?php



use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\user\FundrisingController;
use App\Http\Controllers\user\GalleryController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\MembershipController;
use App\Http\Controllers\user\NewsController;
use App\Http\Controllers\user\NoticeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\FundrisingDonationController;
use Illuminate\Support\Facades\DB;

Route::get('/',[HomeController::class,'showHomePage'])->name('show.home.page');
Route::get('/about',[HomeController::class,'showAboutPage'])->name('show.about.page');
Route::get('/gallery',[GalleryController::class,'showGalleryPage'])->name('show.gallery.page');
Route::get('/news',[NewsController::class,'showNewsPage'])->name('show.news.page');
Route::get('/read-more/{id}',[NewsController::class,'showNewsDetails'])->name('show.news.details');
Route::get('/contact',[ContactController::class,'contactForm'])->name('contact.Form');
Route::post('/contact-store',[ContactController::class,'contactStore'])->name('contact.store');
Route::get('/notice',[NoticeController::class,'showNotice'])->name('show.notice');
Route::get('/fundrising',[FundrisingController::class,'fundrising'])->name('fundrising');
Route::get('/fundrising-read-more/{id}',[FundrisingController::class,'fundrisingDetails'])->name('fundrising.details');
Route::get('/membership',[MembershipController::class,'membership'])->name('membership');
Route::get('/news/category/{id}',[NewsController::class,'categoryNews']);
Route::post('/add-membership',[MembershipController::class,'addMembership'])->name('add.membership');

Route::get('/make-fundrising-donation/{id}',[FundrisingDonationController::class,'fundrisingDonation'])->name('fundrising.donation');

Route::get('/apply-for-crowdfunding',[FundrisingController::class,'applyFundrising'])->name('apply.fundrising');

Route::get('/make-donation',function(){
    $title = "NGO | Make Donation";
    $settingdata = DB::table('ngosetting')->where('id',1)->first();
    return view('user.donation', ['settingdata' => $settingdata])->with('title',$title);
})->name('ngo.make.donation');
// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/student.php';
