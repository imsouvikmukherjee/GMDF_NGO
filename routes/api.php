<?php

use App\Http\Controllers\api\FundrisingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/fundrising-post-app',[FundrisingController::class,'showFundrisingPost']);
Route::post('/contact-message-app',[FundrisingController::class,'ngoContactMessage']);
Route::post('/membership-application',[FundrisingController::class,'membershipStore']);