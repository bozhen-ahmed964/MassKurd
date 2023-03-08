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

    // route to balling page
    public function billing()
    {
        return view('admin.billing');
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

    public function findMe()
    {
        return view('admin.findMe');
    }
}
