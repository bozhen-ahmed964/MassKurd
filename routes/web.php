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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PageController::class, 'index']);
    Route::get('/addMember', [App\Http\Controllers\PageController::class, 'addMember']);
    Route::get('/billing', [App\Http\Controllers\PageController::class, 'billing']);
    Route::get('/buildingCourse', [App\Http\Controllers\PageController::class, 'buildingCourse']);


    Route::get('/Calculator', [App\Http\Controllers\PageController::class, 'Calculator']);
    Route::post('/Calculator', [App\Http\Controllers\PageController::class, 'calCalculator'])->name('Calculator');




    // profile routes
    Route::get('memberTable/profile/{id}', [App\Http\Controllers\PageController::class, 'profile']);





    // anything that deals with member table
    Route::post('/insertMember', [App\Http\Controllers\PageController::class, 'insertMember']);
    Route::get('/memberTable', [App\Http\Controllers\PageController::class, 'memberTable']);
    // edit user button
    Route::get('/edit-member/{id}', [App\Http\Controllers\PageController::class, 'editMember']);
    Route::put('/update-member/{id}', [App\Http\Controllers\PageController::class, 'updateFunction']);
    // delete button
    Route::get('/delete-member/{id}', [App\Http\Controllers\PageController::class, 'destroy']);
    // filter buttons
    Route::get('/memberTable/sort_By_Name', [\App\Http\Controllers\PageController::class, 'sortName']);
    Route::get('/memberTable/sort_By_Gender', [\App\Http\Controllers\PageController::class, 'sortGender']);
    Route::get('/memberTable/sort_By_Status', [\App\Http\Controllers\PageController::class, 'sortStatus']);
});
