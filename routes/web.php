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
    Route::get('/billing', [App\Http\Controllers\PageController::class, 'billing']);
    Route::get('/Calculator', [App\Http\Controllers\PageController::class, 'Calculator']);
    Route::get('/findMe', [App\Http\Controllers\PageController::class, 'findMe']);
    Route::post('/Calculator', [App\Http\Controllers\PageController::class, 'calCalculator'])->name('Calculator');





    //search and adding exercise
    Route::get('/buildingCourse', [App\Http\Controllers\exerciseController::class, 'buildingCourse']);
    Route::get('/buildingCourse/searchExercise', [App\Http\Controllers\exerciseController::class, 'searchExercise']);
    Route::post('/insertExercise', [App\Http\Controllers\exerciseController::class, 'insertExercise']);
    Route::post('/add_exercise', [App\Http\Controllers\exerciseController::class, 'addExercise']);
    Route::get('/buildingCourse/exerciseDetail/{id}', [App\Http\Controllers\exerciseController::class, 'exerciseDetail']);



    // member routes
    Route::get('/addMember', [App\Http\Controllers\memberController::class, 'addMember']);
    Route::get('/memberTable', [App\Http\Controllers\memberController::class, 'memberTable']);
    Route::get('memberTable/profile/{id}', [App\Http\Controllers\memberController::class, 'profile']);
    Route::delete('memberTable/profile/{userId}/{courseId}', [App\Http\Controllers\memberController::class, 'destroyProfile'])->name('destroyProfile');
    Route::post('/insertMember', [App\Http\Controllers\memberController::class, 'insertMember']);
    Route::get('/edit-member/{id}', [App\Http\Controllers\memberController::class, 'editMember']);
    Route::put('/update-member/{id}', [App\Http\Controllers\memberController::class, 'updateFunction']);
    Route::delete('/delete-member/{id}', [App\Http\Controllers\memberController::class, 'destroyProfile']);
    Route::get('/delete-member/{id}', [App\Http\Controllers\memberController::class, 'destroy']);
    Route::get('/memberTable/sort_By_Name', [\App\Http\Controllers\memberController::class, 'sortName']);
    Route::get('/memberTable/sort_By_Gender', [\App\Http\Controllers\memberController::class, 'sortGender']);




    // trainer routes
    Route::get('/trainer', [App\Http\Controllers\trainerController::class, 'trainer']);
    Route::post('/insertTrainer', [App\Http\Controllers\trainerController::class, 'insertTrainer']);
    Route::get('/deleteTrainer/{id}', [App\Http\Controllers\trainerController::class, 'deleteTrainer']);
    Route::get('/editTrainer/{id}', [App\Http\Controllers\trainerController::class, 'editTrainer']);
});
