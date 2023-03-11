<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class printController extends Controller
{
    public function bill()
    {
        return view('admin.pageToPrint.bill');
    }

   
}
