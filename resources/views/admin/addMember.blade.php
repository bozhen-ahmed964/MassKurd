@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Add Member +</h3>
                </div>
            </div>

            <form method="post" action="{{ url('insertMember') }}">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Full Name :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Full_Name" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Age :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Age" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Gender :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Gender" required="">
                        </label>
                    </div>

                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Phone
                            Number:&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 310px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Phone_Number" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);">Wight :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Weight" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Height
                            :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Height" required="">
                        </label>
                    </div>

                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Game Type :<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 310px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);rgb(0, 0, 0);font-size:22px"
                                name="Game_Type" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Pay :<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Pay" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> End Date :<br>
                            <input class="form-control form-control-lg shadow-dark" type="date"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="end_at" required="">
                        </label>
                    </div>
                </div>

                <button class="btn btn-success btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add New Member
                    +
                </button>
            </form>
        </div>
    </div>
@endsection
