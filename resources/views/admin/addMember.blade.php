@extends('layouts.admin')



@section('content')
    <div class="card bg-dark">
        <div class="card-header bg-dark">
            <h4 style="color: white">Add Member </h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('insertMember') }}">
                @csrf
                <label class="form-label" style="color:rgb(255, 255, 255);"> Full Name :&nbsp;
                    <input class="form-control" type="text"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Full_Name"
                        required="">
                </label>


                <label class="form-label" style="color:rgb(255, 255, 255);"> Age :&nbsp;<br>
                    <input class="form-control" type="text"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Age"
                        required="">
                </label>


                <label class="form-label" style="color:rgb(255, 255, 255);"> Gender :&nbsp;<br>
                    <input class="form-control" type="text"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Gender"
                        required="">
                </label>
                <br>
                <br>

                <label class="form-label" style="color:rgb(255, 255, 255);"> Phone
                    Number:&nbsp;<br>
                    <input class="form-control" type="text"
                        style="width: 310px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Phone_Number"
                        required="">
                </label>

                <label class="form-label" style="color:rgb(255, 255, 255);">Wight :&nbsp;<br>
                    <input class="form-control" type="text"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Weight"
                        required="">
                </label>


                <label class="form-label" style="color:rgb(255, 255, 255);"> Height
                    :&nbsp;<br>
                    <input class="form-control" type="text"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Height"
                        required="">
                </label>
                <br>
                <br>

                <label class="form-label" style="color:rgb(255, 255, 255);"> Game Type :<br>
                    <input class="form-control" type="text"
                        style="width: 310px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Game_Type"
                        required="">
                </label>



                <label class="form-label" style="color:rgb(255, 255, 255);"> Pay :<br>
                    <input class="form-control" type="text"
                        style="width: 150px;border-radius:10px;border:2px solid rgb(255, 255, 255);color:white;font-size:18px" name="Pay"
                        required="">
                </label>


                <label class="form-label" style="padding-left: 10px; color:rgb(255, 255, 255) ">Health Issue
                    :<br>
                    <input class="form-control" type="text"
                        style="width: 310px;border-radius:10px;border:2px solid rgb(255, 255, 255); color:white;font-size:18px" name="Health_Issue"
                        required="">
                </label>
                <br>
                <br>

                <button class="btn btn-success" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add New Member
                    +
                </button>
            </form>
        </div>
    </div>
@endsection
