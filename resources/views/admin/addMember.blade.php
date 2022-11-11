@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Member</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('insertMember') }}">
                @csrf
                <label class="form-label" style="color:black">Full Name :&nbsp;
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Full_Name" placeholder="Full Name " required="">
                </label>


                <label class="form-label" style="padding-left: 10px; color:black">Age :&nbsp;<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Age" placeholder="Age" required="">
                </label>


                <label class="form-label" style="padding-left: 10px; color:black">Gender :&nbsp;<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Gender" placeholder="Gender" required="">
                </label>

                <label class="form-label" style="padding-left: 10px; color:black">Phone
                    Number:&nbsp;<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Phone_Number" placeholder="Phone Number" required="">
                </label>

                <label class="form-label" style="padding-left: 10px; color:black">Wight :&nbsp;<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Weight" placeholder="Kg" required="">
                </label>


                <label class="form-label" style="padding-left: 10px; color:black">Height
                    :&nbsp;<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Height" placeholder="Cm" required="">
                </label>

                <label class="form-label" style="padding-left: 10px; color:black">Game Type :<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Game_Type" placeholder="Fitness &amp; Bodybuilding &amp; Cardio" required="">
                </label>
                <label class="form-label" style="padding-left: 10px; color:black">Pay :<br>
                    <input class="form-control" type="text" style="width: 310px;border-radius: 25px;border-width: 4px;"
                        name="Pay" placeholder="IQD" required="">
                </label>
                <label class="form-label" style="padding-left: 10px; color:black">Health Issue
                    :<br>
                    <input class="form-control" type="text"
                        style="width: 310px;border-radius: 25px;border-width: 4px; color:black" name="Health_Issue"
                        placeholder="Health Problems" required="">
                </label>
                <button class="btn btn-success" type="submit" style="margin-left: 15px;border-radius: 20px;">Add New Member
                    +
                </button>
            </form>
        </div>
    </div>
@endsection
