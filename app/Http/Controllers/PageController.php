<?php

namespace App\Http\Controllers;

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
