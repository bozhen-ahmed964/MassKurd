<?php

namespace App\Http\Controllers;

use App\Models\memberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class memberController extends Controller
{


    public function addMember()
    {
        return view('admin.addMember');
    }


    public function insertMember(Request $request)
    {
        $member = new memberModel();
        $member->Full_Name = $request->input('Full_Name');
        $member->Age = $request->input('Age');
        $member->Gender = $request->input('Gender');
        $member->Phone_Number = $request->input('Phone_Number');
        $member->Weight = $request->input('Weight');
        $member->Height = $request->input('Height');
        $member->Game_Type = $request->input('Game_Type');
        $member->Pay = $request->input('Pay');
        $member->updated_at = $request->input('end_at');
        $member->save();
        Alert::success('Added', 'Member Added Successfully');
        return redirect('/addMember');
    }

    public function memberTable()
    {
        $memberTable = memberModel::all();
        return view('admin.memberTable', compact('memberTable'));
    }

    public function editMember($id)
    {
        $member = memberModel::find($id);
        return view('admin.edit', compact('member'));
    }

    public function updateFunction(Request $request, $id)
    {
        $member = memberModel::find($id);
        $member->Full_Name = $request->input('Full_Name');
        $member->Age = $request->input('Age');
        $member->Gender = $request->input('Gender');
        $member->Phone_Number = $request->input('Phone_Number');
        $member->Weight = $request->input('Weight');
        $member->Height = $request->input('Height');
        $member->Game_Type = $request->input('Game_Type');
        $member->Pay = $request->input('Pay');
        $member->updated_at = $request->input('end_at');
        $member->update();
        Alert::success('Info', 'Info Updated Successfully');
        return redirect('memberTable');
    }

    public function destroy($id)
    {
        $member = memberModel::find($id);
        $member->delete();
        Alert::success('Deleted', 'Member Deleted Successfully');
        return redirect('memberTable');
    }

    public function sortName()
    {
        $memberTable = memberModel::orderBy('Full_Name')->get();
        return view('admin.memberTable', compact('memberTable'));
    }

    public function sortGender()
    {
        $memberTable = memberModel::orderBy('Gender')->get();
        return view('admin.memberTable', compact('memberTable'));
    }

    public function profile($id)
    {
        $profileData = memberModel::with('course')->find($id);
        // dd($profileData);
        return view('admin.profile', compact('profileData'));
    }

    public function destroyProfile($userId, $courseId)
    {
        DB::table('member_course')->where('member_id', $userId)->where('course_id', $courseId)->delete();
        Alert::success('Deleted', 'Exercises Has Been Deleted');
        return \back();
    }
}