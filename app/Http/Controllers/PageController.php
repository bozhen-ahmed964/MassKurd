<?php

namespace App\Http\Controllers;

use App\Models\memberModel;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function addMember()
    {
        return view('admin.addMember');
    }

    public function insertMember(Request $request){
       $member = new memberModel();
       $member->Full_Name = $request->input('Full_Name');
       $member->Age = $request->input('Age');
       $member->Gender = $request->input('Gender');
       $member->Phone_Number = $request->input('Phone_Number');
       $member->Weight = $request->input('Weight');
       $member->Height = $request->input('Height');
       $member->Game_Type = $request->input('Game_Type');
       $member->Pay = $request->input('Pay');
       $member->Health_Issue = $request->input('Health_Issue');
       $member->save();
       return redirect('/addMember')->with('success', 'Member Added Successfully');
    }

    public function memberTable()
    {
        return view('admin.memberTable');
    }

    public function billing()
    {
        return view('admin.billing');
    }

    public function buildingCourse()
    {
        return view('admin.buildingCourse');
    }

    public function mealCourse()
    {
        return view('admin.mealCourse');
    }

    public function calCalculator()
    {
        return view('admin.calCalculator');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
