<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\memberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Added', 'Member Added Successfully');
        return redirect('/addMember');
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
        Alert::success('Info', 'Info Updated Successfully');
        return redirect('memberTable');
    }
    // delete member button
    public function destroy($id)
    {
        $member = memberModel::find($id);
        $member->delete();
        Alert::success('Deleted', 'Member Deleted Successfully');
        return redirect('memberTable');
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
        $members = memberModel::all();
        return view('admin.buildingCourse', compact('courses', 'members'));
    }
    // insert new exercise
    public function insertExercise(Request $request)
    {
        $exercise = new courseModel();
        $exercise->Exercise_Name = $request->input('Exercise_Name');
        $exercise->Primary_Muscle = $request->input('Primary_Muscle');
        $exercise->image = $request->input('image');
        $exercise->save();
        Alert::success('Added', 'Exercise Added Successfully');
        return redirect('/buildingCourse');
    }
    // add exercise to member
    public function addExercise(Request $request)
    {
        $member = memberModel::find($request->member_id);
        $member->course()->attach($request->exercises);
        Alert::success('Added', 'Exercises Added To Member Successfully');
        return redirect('/buildingCourse/searchExercise');
    }

    // exercise detail
    public function exerciseDetail($id)
    {
        $exerciseData = courseModel::find($id);
        return view('admin.exerciseDetail', compact('exerciseData'));
    }
    //search for exercise
    public function searchExercise(Request $request)
    {
        $courses = courseModel::all();
        $members = memberModel::all();
        $select = $request->input('query');
        $exerciseData = courseModel::where('Primary_Muscle', 'like', '%' . $select . '%')->get();
        return view('admin.searchExercise', compact('exerciseData', 'members'));
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
        $profileData = memberModel::with('course')->find($id);
        // dd($profileData);
        return view('admin.profile', compact('profileData'));
    }

    public function destroyProfile($userId, $courseId)
    {
        DB::table('member_course')->where('member_id', $userId)->where('course_id', $courseId)->delete();
        Alert::success('Deleted', 'Exercises Has Been Deleted');
        return \back();
    }

    public function findMe()
    {
        return view('admin.findMe');
    }
}
