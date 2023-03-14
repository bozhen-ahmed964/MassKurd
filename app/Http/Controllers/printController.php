<?php

namespace App\Http\Controllers;

use App\Models\memberModel;
use Illuminate\Http\Request;

class printController extends Controller
{
    public function bill($id)
    {

        $profileData = memberModel::find($id);
        return view('admin.pageToPrint.bill', compact('profileData'));
    }
}
