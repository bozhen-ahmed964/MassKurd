@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Building Course</h3>
                </div>
            </div>

            <form action="{{ url('insertExercise') }}" method="post">
                @csrf
                <label class="form-label" style="color:rgb(0, 0, 0);"> Exercise Name :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Exercise_Name" required="">
                </label>
                <label class="form-label" style="color:rgb(0, 0, 0);"> Primary Muscle :&nbsp;
                    <Select
                        class="form-control form-control-lg shadow-dark form-outline"style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Primary_Muscle" required="">
                        <option value="chest">Chest</option>
                        <option value="trapezius">trapezius</option>
                        <option value="shoulder">Shoulder</option>
                        <option value="back / wing">Back / Wing</option>
                        <option value="erector spinae">Erector Spinae</option>
                        <option value="biceps">Biceps</option>
                        <option value="triceps">Triceps</option>
                        <option value="forearm">Forearm</option>
                        <option value="abs / core">Abs / Core</option>
                        <option value="leg">Leg</option>
                        <option value="caif">Caif</option>
                        <option value="hips">Hips</option>
                        <option value="cardio">Cardio</option>
                        <option value="full body">Full Body</option>

                    </Select>
                </label>
                <label class="form-label" style="color:rgb(0, 0, 0);"> image :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="file"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="image" required="">
                </label>
                <button class="btn btn-success btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add New Exercise
                </button>
            </form>
        </div>
        <h3>All Exercises {{ $allExercise }}</h3>
    </div>



    <div class="card my-4">
        <div class="card-body shadow-dark">
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    @foreach ($courses as $exercises)
                        <div class="col">
                            <div><img src="{{ asset('images/' . $exercises->image) }}"
                                    class="rounded img-fluid border-3 border-primary shadow d-block w-100 fit-cover"
                                    style="height: 360px;width: 360px;background: center / cover no-repeat;" />
                                <div class="py-4">
                                    <h4>{{ $exercises->Exercise_Name }}</h4>
                                    <h6> Primary Mucle : {{ $exercises->Primary_Muscle }}</h6>
                                    <a href="{{ url('/buildingCourse/exerciseDetail/' . $exercises->id) }}"
                                        class="btn btn-primary btn-lg border rounded shadow" style="margin-left: 10px;">Show
                                        More</a>
                                    <a href="#" class="btn btn-info btn-lg border rounded shadow"
                                        style="margin-left: 10px;">Add Exercise</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
