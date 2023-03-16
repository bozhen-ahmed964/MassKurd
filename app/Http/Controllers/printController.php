<?php

namespace App\Http\Controllers;

use App\Models\memberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class printController extends Controller
{
    public function bill($id)
    {

        $profileData = memberModel::find($id);
        $totalPay = DB::table('add_member_table')
            ->select(DB::raw('Pay + Course_Pay as total_pay'))
            ->where('id', $profileData->id)
            ->value('total_pay');
        return view('admin.pageToPrint.bill', compact('profileData', 'totalPay'));
    }
}
