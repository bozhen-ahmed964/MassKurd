@extends('layouts.admin')



@section('content')
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
                    <label class="form-label" style="color:rgb(0, 0, 0);"> Gender :&nbsp;
                        <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                            placeholder="male or female"
                            style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                            id="genderInput">
                    </label>
                    <label class="form-label" style="color:rgb(0, 0, 0);"> Age :&nbsp;
                        <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                            placeholder="Age"
                            style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                            id="ageInput">
                    </label>
                    <label class="form-label" style="color:rgb(0, 0, 0);"> Weight :&nbsp;
                        <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                            placeholder="Weight (KG)"
                            style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                            id="weightInput">
                    </label>
                    <div class="col">
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Heart Rate :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                placeholder="Heart Rate"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                id="heartRateInput">
                        </label>
                        <label class="form-label" style="color:rgb(0, 0, 0);"> Duration :&nbsp;
                            <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                                placeholder="Duration (Minutes)"
                                style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                                id="timeInput">
                        </label>
                        <button onclick="calculateCaloriesBurned();" class="btn btn-success btn-lg" type="submit"
                            style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Calculate
                        </button>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <h3 id="result"></h3>
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

<script>
    function calculateCaloriesBurned() {


        // inputs
        const heartRate = parseFloat(document.getElementById('heartRateInput').value);
        const weight = parseFloat(document.getElementById('weightInput').value);
        const time = parseFloat(document.getElementById('timeInput').value);
        const gender = document.getElementById('genderInput').value;
        const age = parseFloat(document.getElementById('ageInput').value);


        // calculate
        const caloriesPerMinute = (gender === 'male') ? (-55.0969 + (0.6309 * heartRate) + (0.1988 * weight) + (0.2017 *
                age)) / 4.184 :
            (-20.4022 + (0.4472 * heartRate) - (0.1263 * weight) + (0.074 * age)) / 4.184;

        const caloriesBurned = caloriesPerMinute * time;

        // output
        document.getElementById('result').innerText = `Calories burned: ${caloriesBurned.toFixed(2)}`;
    }
</script>
