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
    Route::post('/insertMember', [App\Http\Controllers\PageController::class, 'insertMember']);
    Route::get('/memberTable', [App\Http\Controllers\PageController::class, 'memberTable']);
    Route::get('/billing', [App\Http\Controllers\PageController::class, 'billing']);
    Route::get('/buildingCourse', [App\Http\Controllers\PageController::class, 'buildingCourse']);
    Route::get('/mealCourse', [App\Http\Controllers\PageController::class, 'mealCourse']);
    Route::get('/calCalculator', [App\Http\Controllers\PageController::class, 'calCalculator']);
    Route::get('/profile', [App\Http\Controllers\PageController::class, 'profile']);

    // edit user button
    Route::get('/edit-member/{id}', [App\Http\Controllers\PageController::class,'editMember']);
    Route::put('/update-member/{id}', [App\Http\Controllers\PageController::class,'updateFunction']);

    // delete button
    Route::get('/delete-member/{id}',[App\Http\Controllers\PageController::class,'destroy']);
});
