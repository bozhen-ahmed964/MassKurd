<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\memberHistoryModel;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class billController extends Controller
{

    // fetching all data from memberHistory table
    public function billing()
    {
        $memberHistory = memberHistoryModel::paginate(10);
        $totalMemberSalarayCurrent = DB::table('member_history_table')->sum(DB::raw('Pay + Course_Pay'));


        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $previousMonth = $currentMonth - 1;
        $totalMemberSalarayLastMonth = DB::table('member_history_table')
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $previousMonth)
            ->sum(DB::raw('Pay + Course_Pay'));


        $totalMemberSalarayCurrentMonth = DB::table('member_history_table')
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->sum(DB::raw('Pay + Course_Pay'));


        return view('admin.billing', compact('memberHistory', 'totalMemberSalarayCurrent', 'totalMemberSalarayLastMonth', 'totalMemberSalarayCurrentMonth'));
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
