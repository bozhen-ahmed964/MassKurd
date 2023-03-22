<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\memberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{

    // route to calCalculator page
    public function Calculator()
    {
        return view('admin.Calculator');
    }

    // route to profile page

    public function findMe()
    {
        return view('admin.findMe');
    }
}
