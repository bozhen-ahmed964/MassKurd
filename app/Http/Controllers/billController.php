<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\memberHistoryModel;
use RealRashid\SweetAlert\Facades\Alert;

class billController extends Controller
{

    // fetching all data from memberHistory table
    public function billing()
    {
        $memberHistory = memberHistoryModel::all();
        return view('admin.billing', compact('memberHistory'));
    }

    // delete memberHistory btn
    public function memberHistoryDelete($id)
    {
        $memberHistory = memberHistoryModel::find($id);
        $memberHistory->delete();
        Alert::success('Deleted', 'Member History Deleted Successfully');
        return redirect('/billing');
    }
}
