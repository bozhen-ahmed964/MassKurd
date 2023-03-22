<?php

namespace App\Http\Controllers;

use App\Models\memberHistoryModel;
use Illuminate\Http\Request;

class billController extends Controller
{

    // fetching all data from memberHistory table
    public function billing()
    {
        $memberHistory = memberHistoryModel::all();
        return view('admin.billing', compact('memberHistory'));
    }

    // delete memberHistory btn
    
}
