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
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-weight: bold;">
                        <span style="color: rgb(64, 64, 64); background-color: transparent;">CALCULATE THE
                            CALORIES BURNED BY
                            HEART RATE</span>
                    </h2>
                </div>
                <div class="text-center my-4">
                    <form action="{{ url('/Calculator') }}" method="post">
                        @csrf
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Gender :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                placeholder="Gender"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="gender" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Age :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                placeholder="Age"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="age" required="">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Weight :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                placeholder="Weight"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                name="weight" required="">
                        </label>
                        <div class="col">
                            <label class="form-label" style="color:rgb(0, 0, 0);"> Heart Rate :&nbsp;
                                <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                    placeholder="Heart Rate"
                                    style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                    name="weight" required="">
                            </label>
                            <label class="form-label" style="color:rgb(0, 0, 0);"> Duration :&nbsp;
                                <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                    placeholder="Duration (Minutes))"
                                    style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                    name="weight" required="">
                            </label>
                            <button class="btn btn-success btn-lg" type="submit"
                                style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Calculate
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center my-4">
                <h3>Result Here</h3>
            </div>
            {{-- Info Table --}}
            <table class="table my-6">
                <thead style="font-size: 18px; color:black;">
                    <tr>
                        <th scope="col">30 Minutes of Exersice</th>
                        <th scope="col">Fat Calorise Burned </th>
                        <th scope="col">GLYCOGEN CALORIES
                            BURNED</th>
                        <th scope="col">TOTAL CALORIES
                            BURNED</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Low Intensity Group (50%)</td>
                        <td>120</td>
                        <td>80</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Hight Intensity Group (75%)</td>
                        <td>140</td>
                        <td>260</td>
                        <td>400</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
