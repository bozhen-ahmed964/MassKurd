<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainerController extends Controller
{

    public function trainer()
    {
        return view('admin.addTrainer');
    }


}
