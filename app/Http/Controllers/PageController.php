<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\memberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $chestCount = DB::select("SELECT COUNT(*) as chestCount FROM course_table WHERE Primary_Muscle = 'chest'");
        $trapeziusCount = DB::select("SELECT COUNT(*) as trapeziusCount FROM course_table WHERE Primary_Muscle = 'trapezius'");
        $shoulderCount = DB::select("SELECT COUNT(*) as shoulderCount FROM course_table WHERE Primary_Muscle = 'shoulder'");
        $backCount = DB::select("SELECT COUNT(*) as backCount FROM course_table WHERE Primary_Muscle = 'back / wing'");
        $erectorCount = DB::select("SELECT COUNT(*) as erectorCount FROM course_table WHERE Primary_Muscle = 'erector spinae'");
        $bicepCount = DB::select("SELECT COUNT(*) as bicepCount FROM course_table WHERE Primary_Muscle = 'biceps'");
        $tricepCount = DB::select("SELECT COUNT(*) as tricepCount FROM course_table WHERE Primary_Muscle = 'triceps'");
        $forearmCount = DB::select("SELECT COUNT(*) as forearmCount FROM course_table WHERE Primary_Muscle = 'forearm'");
        $absCount = DB::select("SELECT COUNT(*) as absCount FROM course_table WHERE Primary_Muscle = 'abs / core'");
        $legCount = DB::select("SELECT COUNT(*) as legCount FROM course_table WHERE Primary_Muscle = 'leg'");
        $caifCount = DB::select("SELECT COUNT(*) as caifCount FROM course_table WHERE Primary_Muscle = 'caif'");
        $hipsCount = DB::select("SELECT COUNT(*) as hipsCount FROM course_table WHERE Primary_Muscle = 'hips'");
        $cardioCount = DB::select("SELECT COUNT(*) as cardioCount FROM course_table WHERE Primary_Muscle = 'cardio'");
        $fullbodyCount = DB::select("SELECT COUNT(*) as fullbodyCount FROM course_table WHERE Primary_Muscle = 'full body'");
        return view('admin.buildingCourse', compact('courses', 'chestCount', 'trapeziusCount', 'shoulderCount', 'backCount', 'erectorCount', 'bicepCount', 'tricepCount', 'forearmCount', 'absCount', 'legCount', 'caifCount', 'hipsCount', 'cardioCount', 'fullbodyCount'));
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
    // exercise detail
    public function exerciseDetail($id)
    {
        $exerciseData = courseModel::find($id);
        return view('admin.exerciseDetail', compact('exerciseData'));

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
