@extends('layouts.admin')



@section('content')
    <div class="card bg-dark">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Update Member Informations</h3>
                </div>
        <div class="card-body">
            <form method="post" action="{{ url('update-member/'.$member->id) }}">
                @csrf
                @method('PUT')
                <label class="form-label" style="color:rgb(255, 255, 255);"> Full Name :&nbsp;
                    <input class="form-control" type="text" value="{{ $member->Full_Name }}"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Full_Name"
                        required="">
                </label>


                <label class="form-label" style="color:rgb(255, 255, 255);"> Age :&nbsp;<br>
                    <input class="form-control" type="text" value="{{ $member->Age }}"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Age"
                        required="">
                </label>


                <label class="form-label" style="color:rgb(255, 255, 255);"> Gender :&nbsp;<br>
                    <input class="form-control" type="text" value="{{ $member->Gender }}"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Gender"
                        required="">
                </label>
                <br>
                <br>

                <label class="form-label" style="color:rgb(255, 255, 255);"> Phone
                    Number:&nbsp;<br>
                    <input class="form-control" type="text" value="{{ $member->Phone_Number }}"
                        style="width: 310px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Phone_Number"
                        required="">
                </label>

                <label class="form-label" style="color:rgb(255, 255, 255);">Wight :&nbsp;<br>
                    <input class="form-control" type="text" value="{{ $member->Weight }}"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Weight"
                        required="">
                </label>


                <label class="form-label" style="color:rgb(255, 255, 255);"> Height
                    :&nbsp;<br>
                    <input class="form-control" type="text" value="{{ $member->Height }}"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Height"
                        required="">
                </label>
                <br>
                <br>

                <label class="form-label" style="color:rgb(255, 255, 255);"> Game Type :<br>
                    <input class="form-control" type="text" value="{{ $member->Game_Type }}"
                        style="width: 310px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Game_Type"
                        required="">
                </label>



                <label class="form-label" style="color:rgb(255, 255, 255);"> Pay :<br>
                    <input class="form-control" type="text" value="{{ $member->Pay }}"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Pay"
                        required="">
                </label>


                <label class="form-label" style="padding-left: 10px; color:rgb(255, 255, 255) ">Health Issue
                    :<br>
                    <input class="form-control" type="text" value="{{ $member->Health_Issue }}"
                        style="width: 310px;border-radius:10px;border:2px solid rgb(255, 255, 255); color:white;font-size:18px" name="Health_Issue"
                        required="">
                </label>
                <br>
                <br>

                <button class="btn btn-success" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Update Information

                </button>
            </form>
        </div>
    </div>
@endsection
