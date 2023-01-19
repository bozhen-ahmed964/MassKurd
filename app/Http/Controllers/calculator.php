<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculator extends Controller
{
    public function calCalculate(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');
        $activity = $request->input('activity');

        // Perform calculations using the Harris-Benedict Equation
        $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
        $tdee = $bmr * $activity;

        return view('calculator.result', ['tdee' => $tdee]);
    }
}
