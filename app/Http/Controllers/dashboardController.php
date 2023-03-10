<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\memberModel;
use App\Models\trainerModel;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function index()
    {
        $totalMember = memberModel::count();
        $totalMaleMember = memberModel::where('gender', 'male')->count();
        $totalFemaleMember = memberModel::where('gender', 'female')->count();

        $totalTrainer = trainerModel::count();

        $totalExerciseNumber = courseModel::count();

        return view('admin.index', compact('totalMember', 'totalMaleMember', 'totalFemaleMember', 'totalTrainer' , 'totalExerciseNumber'));
    }
}
