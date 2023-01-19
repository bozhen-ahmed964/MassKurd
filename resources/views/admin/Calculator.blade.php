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
                        <h3>Input Section</h3>
                        <form method="post" action="{{ route('Calculator') }}">
                            @csrf
                            <div class="form-group">
                                <label for="weight">Weight (kg):</label>
                                <input type="text" name="weight" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="height">Height (cm):</label>
                                <input type="text" name="height" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="activity">Activity Level:</label>
                                <select name="activity" class="form-control">
                                    <option value="1.2">Sedentary (little or no exercise)</option>
                                    <option value="1.375">Lightly Active (light exercise or sports 1-3 days a week)
                                    </option>
                                    <option value="1.55">Moderately Active (moderate exercise or sports 3-5 days a week)
                                    </option>
                                    <option value="1.725">Very Active (hard exercise or sports 6-7 days a week)</option>
                                    <option value="1.9">Super Active (very hard exercise or sports and physical job or
                                        training 2 times a day)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Calculate</button>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    {{-- calc input --}}
                    <div class="card-body">
                        <h3>Output Section & Guide</h3>
                        <h1>{{ $result }}</h1>
                    </div>
                </div>
            </div>

        </div>
    @endsection
