@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Calculator</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    {{-- calc input --}}
                    <div class="card-body">
                        <h3>Calories Calculator </h3>
                        <form method="post" action="{{ route('Calculator') }}">
                            @csrf
                            <div class="form-group">
                                <label style="font-size: 22px;">Weight (kg):</label>
                                <input type="text" name="weight" class="form-control form-control-lg shadow-dark"
                                    style="font-size: 22px;">
                            </div> <br><br>
                            <div class="form-group">
                                <label style="font-size: 22px;">Height (cm):</label>
                                <input type="text" name="height" class="form-control form-control-lg shadow-dark"
                                    style="font-size: 22px;">
                            </div><br><br>
                            <div class="form-group">
                                <label style="font-size: 22px;">Age:</label>
                                <input type="text" name="age" class="form-control form-control-lg shadow-dark"
                                    style="font-size: 22px;">
                            </div><br><br>
                            <div class="form-group">
                                <label style="font-size: 22px;">Activity Level:</label>
                                <select name="activity" class="form-control form-control-lg shadow-dark"
                                    style="font-size: 22px;">
                                    <option value="1.2">Sedentary (little or no exercise)</option>
                                    <option value="1.375">Lightly Active (light exercise or sports 1-3 days a week)
                                    </option>
                                    <option value="1.55">Moderately Active (moderate exercise or sports 3-5 days a week)
                                    </option>
                                    <option value="1.725">Very Active (hard exercise or sports 6-7 days a week)</option>
                                    <option value="1.9">Super Active (very hard exercise or sports and physical job or
                                        training 2 times a day)</option>
                                </select>
                            </div><br><br>
                            <button type="submit" class="btn btn-primary btn-lg">Calculate</button>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    {{-- calc input --}}
                    <div class="card-body shadow-dark">
                        <h3>CAL Calculator</h3>
                        <h1>result here</h1>
                        <ul>
                            <h4>Activity Level</h4>
                            <li>
                                Sedentary (little or no exercise) = <strong class="text-lg"
                                    style="color: black;font-size:16px;">1.2</strong>
                            </li>
                            <li>
                                Lightly Active (light exercise or sports 1-3 days a week) = <strong class="text-lg"
                                    style="color: black;font-size:16px;">1.375</strong>
                            </li>
                            <li>
                                Moderately Active (moderate exercise or sports 3-5 days a week) = <strong class="text-lg"
                                    style="color: black;font-size:16px;">1.55</strong>
                            </li>
                            <li>
                                Very Active (hard exercise or sports 6-7 days a week) = <strong class="text-lg"
                                    style="color: black;font-size:16px;">1.725</strong>
                            </li>
                            <li>
                                Super Active (very hard exercise or sports and physical job or
                                training 2 times a day) = <strong class="text-lg"
                                    style="color: black;font-size:16px;">1.9</strong>
                            </li>
                        </ul>
                        <br>
                        <br>
                        <h4> Harris-Benedict Equation</h4>
                        <h3> BMR = 66 + (13.7 * Weight) + (5 * Height) - (6.8 * Age)
                            CAL = BMR * Activity</h3>
                    </div>
                </div>
                <div class="card-body shadow-dark"></div>
            </div>

        </div>
    @endsection
