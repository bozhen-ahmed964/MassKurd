<?php

namespace App\Http\Controllers;

use PDO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class settingController extends Controller
{


    public function setting()
    {
        return view('admin.setting');
    }


    //deleting all active member
    public function deleteActiveMember()
    {
        DB::table('add_member_table')->truncate();
        Alert::success('Success', 'All Active Member Deleted');
        return redirect()->back();
    }


    //deleting all histoy member
    public function deleteHistoryMember()
    {
        DB::table('member_history_table')->truncate();
        Alert::success('Success', 'All History Member Deleted');
        return redirect()->back();
    }


    //deleting all exercise
    public function deleteExercise()
    {
        DB::table('course_table')->truncate();
        Alert::success('Success', 'All Exercise Deleted');
        return redirect()->back();
    }
}
