<?php

use Admin\FrontEndController;
use Admin\AddMemberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PageController::class, 'index']);
    Route::get('/addMember', [App\Http\Controllers\PageController::class, 'addMember']);
    Route::get('/memberTable', [App\Http\Controllers\PageController::class, 'memberTable']);
    Route::get('/billing', [App\Http\Controllers\PageController::class, 'billing']);
    Route::get('/trainer',[App\Http\Controllers\trainerController::class, 'trainer']);
    Route::get('/buildingCourse', [App\Http\Controllers\PageController::class, 'buildingCourse']);
    Route::get('/Calculator', [App\Http\Controllers\PageController::class, 'Calculator']);
    Route::get('/findMe', [App\Http\Controllers\PageController::class, 'findMe']);





    Route::post('/Calculator', [App\Http\Controllers\PageController::class, 'calCalculator'])->name('Calculator');



    // profile routes
    Route::get('memberTable/profile/{id}', [App\Http\Controllers\PageController::class, 'profile']);
    Route::delete('memberTable/profile/{userId}/{courseId}', [App\Http\Controllers\PageController::class, 'destroyProfile'])->name('destroyProfile');

    // anything that deals with member table
    Route::post('/insertMember', [App\Http\Controllers\PageController::class, 'insertMember']);

    // edit user button
    Route::get('/edit-member/{id}', [App\Http\Controllers\PageController::class, 'editMember']);
    Route::put('/update-member/{id}', [App\Http\Controllers\PageController::class, 'updateFunction']);
    // delete button
    Route::delete('/delete-member/{id}', [App\Http\Controllers\PageController::class, 'destroyProfile']);
    Route::get('/delete-member/{id}', [App\Http\Controllers\PageController::class, 'destroy']);
    // filter buttons
    Route::get('/memberTable/sort_By_Name', [\App\Http\Controllers\PageController::class, 'sortName']);
    Route::get('/memberTable/sort_By_Gender', [\App\Http\Controllers\PageController::class, 'sortGender']);


    //search for exercise
    Route::get('/buildingCourse/searchExercise', [App\Http\Controllers\PageController::class, 'searchExercise']);
    // anything that deals with billing table

    // insert exercise
    Route::post('/insertExercise', [App\Http\Controllers\PageController::class, 'insertExercise']);
    // add exercise to member
    Route::post('/add_exercise', [App\Http\Controllers\PageController::class, 'addExercise']);
    // route to exercise detail
    Route::get('/buildingCourse/exerciseDetail/{id}', [App\Http\Controllers\PageController::class, 'exerciseDetail']);
});
