<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\memberModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class exerciseController extends Controller
{

    public function buildingCourse()
    {
        $courses = courseModel::all();
        $members = memberModel::all();
        return view('admin.buildingCourse', compact('courses', 'members'));
    }


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

    public function addExercise(Request $request)
    {
        $member = memberModel::find($request->member_id);
        $member->course()->attach($request->exercises);
        Alert::success('Added', 'Exercises Added To Member Successfully');
        return redirect('/buildingCourse/searchExercise');
    }

    public function exerciseDetail($id)
    {
        $exerciseData = courseModel::find($id);
        return view('admin.exerciseDetail', compact('exerciseData'));
    }

    public function searchExercise(Request $request)
    {
        $courses = courseModel::all();
        $members = memberModel::all();
        $select = $request->input('query');
        $exerciseData = courseModel::where('Primary_Muscle', 'like', '%' . $select . '%')->get();
        return view('admin.searchExercise', compact('exerciseData', 'members'));
    }
}
