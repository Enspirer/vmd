<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\CandidateController;
use App\Http\Controllers\Frontend\EmployeeController;
use App\Http\Controllers\Frontend\IndividualCourseController;
use App\Http\Controllers\Frontend\FindCandidatesController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('about-us', [AboutUsController::class, 'index'])->name('about_us');
Route::get('contact-us', [ContactController::class, 'index'])->name('contact_us');

Route::get('for-candidate', [CandidateController::class, 'index'])->name('for_candidate');
Route::get('for-employee', [EmployeeController::class, 'index'])->name('for_employee');

Route::post('find_canidates', [FindCandidatesController::class, 'find_canidates'])->name('find_canidates');
Route::post('post_job', [FindCandidatesController::class, 'post_job'])->name('post_job');

Route::post('contact_us_send', [ContactController::class, 'contact_us_send'])->name('contact_us_send');



Route::get('individual-course', [IndividualCourseController::class, 'index'])->name('individual_course');


/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', [AccountController::class, 'index'])->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});


