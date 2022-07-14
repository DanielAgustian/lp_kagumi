<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DetailLeadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', [LandingController::class, 'homepage'])->name('homepage');
Route::get('/', [LandingController::class, 'homepageNew'])->name('homepageNew');
Route::get('/contact-us', [LandingController::class, 'contactUs'])->name('contactUs');
Route::get('/portofolio',  [LandingController::class, 'portofolioPage'])->name('portofolioPage');

// Landing Page
Route::get('/digital-activation-gamification', [LandingController::class, 'landing'])->name('landingPage');
Route::get('/kagumi-academy', [LandingController::class, 'kagumiAcademyPage'])->name('kagumiAcademyPage');




// Get Calendar Process

Route::get('/get-future-event', [CalendarController::class, 'getFutureEvent'])->name('getFutureEvent');

// POST PROCESS

Route::post('/post-meeting', [PostController::class, 'createMeeting'])->name('postMeeting');
Route::post('/post-contact-us', [PostController::class, 'makeContactUs'])->name('makeContactUs');


// Crudbooster Linkedin
// CRUDBOOSTER CUSTOM VIEW
Route::get('admin/detail-lead/{id}', [DetailLeadController::class, 'detailLeadsPage'])->name('detailLeadsPage');
Route::post('admin/change-status/{id}',[DetailLeadController::class, 'changeStatus'])->name('changeStatusLead');
Route::post('admin/update-lead-data/{id}', [DetailLeadController::class, 'updateDetail'])->name('updateDataLead');
Route::post('admin/save-activity', [DetailLeadController::class, 'saveFollowUp'])->name('saveFollowUp');
Route::post('admin/change-assign-to', [DetailLeadController::class, 'assignLeads'])->name('assignLeads');
