@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Add Trainer</h3>
                </div>
            </div>
            <form method="POST" action="{{ url('insertTrainer') }}">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Full Name :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Trainer_Name" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Age :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Age" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Gender :&nbsp;<br>
                            <select name="Gender" class="form-control form-control-lg shadow-dark"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Phone
                            Number:&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                style="width: 310px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Phone_Number" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);">Monthly Pay :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="number"
                                style="width: 310px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Pay" required="">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add Trainer
                </button>
            </form>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-body shadow-dark">
            <div class="container py-4 py-xl-5">
                <div class="row row-cols-xl-3">
                    @foreach ($trainers as $trainerss)
                        <div class="col" style="height: 600px;">
                            <div>
                                <div class="py-4">
                                    <h4>{{ $trainerss->Trainer_Name }}</h4>
                                    <p>Gender : {{ $trainerss->Gender }}</p>
                                    <p>Age : {{ $trainerss->Age }}</p>
                                    <p>Phone_No : {{ $trainerss->Phone_Number }}</p>
                                    <p>Pay : {{ $trainerss->Pay }}</p>
                                    <p>Added At  : {{ $trainerss->created_at }}</p>
                                </div>
                                <div>
                                    <button class="btn btn-dark" type="button">Update</button>
                                    <a href="{{ url('deleteTrainer/' . $trainerss->id) }}"
                                        class="btn btn-primary btn-lg">Delete</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection
