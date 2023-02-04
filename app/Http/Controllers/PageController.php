<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\memberModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // route to dashboard page
    public function index()
    {
        return view('admin.index');
    }



    // anything that deal with table
    // route to addMember page
    public function addMember()
    {
        return view('admin.addMember');
    }
    // adding new member
    public function insertMember(Request $request)
    {
        $member = new memberModel();
        $member->Full_Name = $request->input('Full_Name');
        $member->Age = $request->input('Age');
        $member->Gender = $request->input('Gender');
        $member->Phone_Number = $request->input('Phone_Number');
        $member->Weight = $request->input('Weight');
        $member->Height = $request->input('Height');
        $member->Game_Type = $request->input('Game_Type');
        $member->Pay = $request->input('Pay');
        $member->updated_at = $request->input('end_at');
        $member->save();
        return redirect('/addMember')->with('success', 'Member Added Successfully');
    }
    // for fetching all data in data base to table
    public function memberTable()
    {
        $memberTable = memberModel::all();
        return view('admin.memberTable', compact('memberTable'));
    }
    // edit button
    public function editMember($id)
    {
        $member = memberModel::find($id);
        return view('admin.edit', compact('member'));
    }
    // updating member info
    public function updateFunction(Request $request, $id)
    {
        $member = memberModel::find($id);
        $member->Full_Name = $request->input('Full_Name');
        $member->Age = $request->input('Age');
        $member->Gender = $request->input('Gender');
        $member->Phone_Number = $request->input('Phone_Number');
        $member->Weight = $request->input('Weight');
        $member->Height = $request->input('Height');
        $member->Game_Type = $request->input('Game_Type');
        $member->Pay = $request->input('Pay');
        $member->updated_at = $request->input('end_at');
        $member->update();
        return redirect('memberTable')->with('status', "Member Updated Successfully");
    }
    // delete member button
    public function destroy($id)
    {
        $member = memberModel::find($id);
        $member->delete();
        return redirect('memberTable')->with('status', 'Member Deleted Successfully');
    }

    // sort buttons
    // Sort by Name
    public function sortName()
    {
        $memberTable = memberModel::orderBy('Full_Name')->get();
        return view('admin.memberTable', compact('memberTable'));
    }
    // Sort by Gender
    public function sortGender()
    {
        $memberTable = memberModel::orderBy('Gender')->get();
        return view('admin.memberTable', compact('memberTable'));
    }



    // route to balling page
    public function billing()
    {
        return view('admin.billing');
    }







    // route to buildingCourse page
    public function buildingCourse()
    {
        $courses = courseModel::all();
        return view('admin.buildingCourse', compact('courses'));
    }
    // insert new exercise
    public function insertExercise(Request $request)
    {
        $exercise = new courseModel();
        $exercise->Exercise_Name = $request->input('Exercise_Name');
        $exercise->Primary_Muscle = $request->input('Primary_Muscle');
        $exercise->image = $request->input('image');
        $exercise->save();
        return redirect('/buildingCourse')->with('success', 'Exercise Added Successfully');
    }








    // route to calCalculator page
    public function Calculator()
    {
        return view('admin.Calculator');
    }
    // cal calculater
    public function calCalculator(Request $request)
    {
        $heartRate = $request->input('heart_rate');
        $weight = $request->input('weight');
        $time = $request->input('time');
        $gender = $request->input('gender');
        $age = $request->input('age');

        // calory burned based on heart rate
        if ($gender == 'male') {
            $CB = $time * (0.6309 * $heartRate + 0.1988 * $weight + 0.2017 * $age - 55.0969) / 4.184;
            return view('calCalculator', ['CB' => $CB]);
        } elseif ($gender == 'female') {
            $CB = $time * (0.4472 * $heartRate + 0.1263 * $weight + 0.074 * $age - 20.4022) / 4.184;
            return view('calCalculator', ['CB' => $CB]);
        }
    }






    // route to profile page
    public function profile($id)
    {
        $profileData = memberModel::find($id);
        return view('admin.profile', compact('profileData'));
    }
    public function findMe()
    {
        return view('admin.findMe');
    }
}
