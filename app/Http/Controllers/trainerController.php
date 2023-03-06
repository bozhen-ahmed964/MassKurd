<?php

namespace App\Http\Controllers;

use App\Models\trainerModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class trainerController extends Controller
{
    // show all trainers
    public function trainer()
    {
        $trainers = trainerModel::all();
        return view('admin.addTrainer', compact('trainers'));
    }

    // add trainer
    public function insertTrainer(Request $request){
        $trainer = new trainerModel();
        $trainer->Trainer_Name = $request->input('Trainer_Name');

        $trainer->Age = $request->input('Age');
        $trainer->Gender = $request->input('Gender');
        $trainer->Phone_Number = $request->input('Phone_Number');
        $trainer->Pay = $request->input('Pay');
        $trainer->save();
         Alert::success('Success', 'Trainer Added Successfully');
        return redirect('/trainer');
    }

    // delete trainer
    public function deleteTrainer($id){
        $trainer = trainerModel::find($id);
        $trainer->delete();
        Alert::success('Success', 'Trainer Deleted Successfully');
        return redirect('trainer');
    }

    // edit trainer
    // public function editTrainer(Request $request,$id){
    //     $trainer = trainerModel::find($id);
    //     $trainer->Trainer_Name = $request->input('Trainer_Name');
    //     $trainer->Age = $request->input('Age');
    //     $trainer->Gender = $request->input('Gender');
    //     $trainer->Phone_Number = $request->input('Phone_Number');
    //     $trainer->Pay = $request->input('Pay');
    //     $trainer->update();
    //     Alert::success('Success', 'Trainer Updated Successfully');
    //     return view('admin.addTrainer', compact('trainer'));
    // }

}
