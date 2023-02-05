@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Exercise Detail</h3>
                </div>
            </div>
            <h3>{{ $exerciseData->Exercise_Name }}</h3>
            <h3>{{ $exerciseData->Primary_Muscle }}</h3>
            <img src="{{ asset('images/' . $exerciseData->image) }}"
                class="rounded img-fluid border-3 border-primary shadow d-block w-100 fit-cover"
                style="height: 360px;width: 360px;background: center / cover no-repeat;" />
        </div>
    </div>
@endsection
