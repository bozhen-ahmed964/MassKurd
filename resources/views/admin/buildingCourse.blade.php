@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Building Course</h3>
                </div>
            </div>
            {{-- sort section --}}

        </div>
    </div>

    {{-- traininns --}}
    <div class="card my-4">
        <div class="card-body shadow-dark">
            <form action="{{ url('insertExercise') }}" method="post">
                @csrf
                <label class="form-label" style="color:rgb(0, 0, 0);"> Exercise Name :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Exercise_Name" required="">
                </label>
                <label class="form-label" style="color:rgb(0, 0, 0);"> Primary Muscle :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Primary_Muscle" required="">
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
    </div>
@endsection
