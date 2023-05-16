@extends('layouts.admin')


{{-- update ( gender , pay , gameType , end time) ba mazbwty nakat --}}

@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Update Member Information</h3>
                </div>
            </div>
            <form method="post" action="{{ url('update-member/' . $member->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Full Name :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                value="{{ $member->Full_Name }}"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Full_Name">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Age :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                value="{{ $member->Age }}"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Age">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Gender :&nbsp;<br>
                            <select name="Gender" class="form-control form-control-lg shadow-dark"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px">
                                <option value="male" @if ($member->Gender == 'male') selected @endif>Male</option>
                                <option value="female" @if ($member->Gender == 'female') selected @endif>Female</option>
                            </select>
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Trainer :&nbsp;<br>
                            <select name="trainer_id" class="form-control form-control-lg shadow-dark"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px">
                                @foreach ($trainers as $trainer)
                                    <option value="{{ $trainer->id }}">{{ $trainer->Trainer_Name }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="col-3">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Phone
                            Number:&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                value="{{ $member->Phone_Number }}"
                                style="width: 310px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Phone_Number">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);">Wight :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                value="{{ $member->Weight }}"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Weight">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Height
                            :&nbsp;<br>
                            <input class="form-control form-control-lg shadow-dark" type="text"
                                value="{{ $member->Height }}"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="Height">
                        </label>
                    </div>

                    <div class="col-3">

                        <label class="form-label" style="color:rgb(0, 0, 0);"> Game Type :<br>
                            <select name="Game_Type" class="form-control form-control-lg shadow-dark"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px">
                                <option value="Cardio" @if ($member->Game_Type == 'Cardio') selected @endif>Cardio</option>
                                <option value="Fitness" @if ($member->Game_Type == 'Fitness') selected @endif>Fitness</option>
                                <option value="BodyBuilding" @if ($member->Game_Type == 'BodyBuilding') selected @endif>BodyBuilding
                                </option>
                            </select>
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Pay :<br>
                            <select name="Pay" class="form-control form-control-lg shadow-dark"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px">
                                <option value="30,000" @if ($member->Pay == '30,000') selected @endif>1 Month 30,000 IQD
                                </option>
                                <option value="90,000" @if ($member->Pay == '90,000') selected @endif>3 Month 90,000 IQD
                                </option>
                            </select>
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Course Pay :<br>
                            <select name="Course_Pay" class="form-control form-control-lg shadow-dark"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px">
                                <option value="5000" @if ($member->Course_Pay == '5000') selected @endif>Exercise Course
                                    5,000 IQD</option>
                                <option value="10000" @if ($member->Course_Pay == '10000') selected @endif>Exercise Course
                                    10,000 IQD</option>
                            </select>
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> End Date :<br>
                            <input class="form-control form-control-lg shadow-dark" type="date"
                                value="{{ $member->updated_at->format('Y-m-d') }}"
                                style="width: 150px;border-radius:10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="end_at">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Update Member Info
                </button>
            </form>
        </div>
    </div>
@endsection
