@extends('layouts.admin')



@section('content')
    {{-- INFORMATION CARD --}}
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Calculator</h3>
                </div>
            </div>
            <div class="row my-5">
                {{-- Calorie --}}
                <div class="col-4">
                    <div class="card-body shadow-dark">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 my-4">
                                <h3 class="text-white text-center text-capitalize ps-3 ">CALORIES</h3>
                            </div>
                        </div>
                        <table class="table table-striped shadow-success " style="font-size: 18px; color:black;">
                            <thead>
                                <tr>
                                    <th>Food</th>
                                    <th>Calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Protine --}}
                <div class="col-4">
                    <div class="card-body shadow-dark">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 my-4">
                                <h3 class="text-white text-center text-capitalize ps-3 ">PROTINE</h3>
                            </div>
                        </div>
                        {{-- code here --}}
                        <table class="table table-striped shadow-primary " style="font-size: 18px; color:black;">
                            <thead>
                                <tr>
                                    <th>Food</th>
                                    <th>Calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- CARBOHYDRATES --}}
                <div class="col-4">
                    <div class="card-body shadow-dark">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-warning shadow-warning border-radius-lg pt-4 pb-3 my-4">
                                <h3 class="text-white text-center text-capitalize ps-3 ">CARBOHYDRATES</h3>
                            </div>
                        </div>
                        {{-- code here --}}
                        <table class="table table-striped shadow-warning " style="font-size: 18px; color:black;">
                            <thead>
                                <tr>
                                    <th>Food</th>
                                    <th>Calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                                <tr>
                                    <td>body1</td>
                                    <td>body2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CAL CALCULATOR CARD --}}
    <div class="card my-4">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
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
                <div class="col-9">
                    {{-- calc output --}}
                    <div class="card-body shadow-dark">
                        <h3>CAL Calculator</h3>
                        <h1>$result here</h1>
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
            </div>
        </div>
    </div>
    
    @endsection
