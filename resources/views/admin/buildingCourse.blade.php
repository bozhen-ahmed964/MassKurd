@extends('layouts.admin')

<style>
    .pagination {
        display: flex;
        justify-content: start;
        align-items: center;
        margin-top: 20px;
    }

    .page-number {
        font-size: 18px;
        font-weight: bold;
        margin-right: 10px;
    }

    .pagination-links {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .pagination-links li {
        margin: 0 5px;
    }

    .pagination-links li.disabled span,
    .pagination-links li.active span {
        background-color: #333;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .pagination-links li a {
        display: block;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #eee;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .pagination-links li a:hover {
        background-color: #ddd;
    }
</style>

@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Building Course</h3>
                </div>
            </div>
            <h3 class="text-dark mt-5">Add New Exercise</h3>
            <form action="{{ url('insertExercise') }}" method="post">
                @csrf
                <label class="form-label" style="color:rgb(0, 0, 0);"> Exercise Name :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Exercise_Name">
                </label>
                <label class="form-label" style="color:rgb(0, 0, 0);"> Primary Muscle :&nbsp;
                    <Select
                        class="form-control form-control-lg shadow-dark form-outline"style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Primary_Muscle">
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
                        name="image">
                </label>
                <button class="btn btn-success btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add New Exercise
                </button>
            </form>
            <h3 class="text-dark mt-5">Search For Exercise</h3>
            <form type="get" action="{{ url('/buildingCourse/searchExercise') }}">
                <label class="form-label" style="color:rgb(0, 0, 0);"> Primary Muscle :&nbsp;
                    <Select
                        class="form-control form-control-lg shadow-dark form-outline"style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="query">
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
                <button class="btn btn-dark btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Search
                </button>
            </form>
        </div>
    </div>


    <div class="card my-5">
        <div class="card-body shadow-dark">
            <div class="container py-4 py-xl-5">
                <form action="{{ url('add_exercise') }}" method="post">
                    @csrf
                    <label class="form-label mb-6" style="color:rgb(0, 0, 0);"> Member Name :&nbsp;
                        <Select
                            class="form-control form-control-lg shadow-dark form-outline"style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                            name="member_id">
                            @foreach ($members as $memberName)
                                <option value="{{ $memberName->id }}">{{ $memberName->Full_Name }}</option>
                            @endforeach
                        </Select>
                    </label>
                    <button class="btn btn-dark btn-lg" type="submit"
                        style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add Exercise To Member
                    </button>
                    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                        @foreach ($courses as $exercises)
                            <div class="col">
                                <div><img src="{{ asset('images/' . $exercises->image) }}"
                                        class="rounded img-fluid border-3 border-primary shadow d-block w-100 fit-cover"
                                        style="height: 360px;width: 360px;background: center / cover no-repeat;" />
                                    <div class="py-4">
                                        <h4>{{ $exercises->Exercise_Name }}</h4>
                                        <h6> Primary Mucle : {{ $exercises->Primary_Muscle }}</h6>
                                        <a href="{{ url('/buildingCourse/editExercise/' . $exercises->id) }}"
                                            class="btn btn-dark btn-lg border rounded shadow">Edit</a>
                                        <a href="{{ url('/buildingCourse/delete/' . $exercises->id) }}"
                                            class="btn btn-primary btn-lg border rounded shadow">Delete</a>
                                        <div class="form-check">
                                            <input value="{{ $exercises->id }}" name="exercises[]"
                                                id="formCheck-{{ $exercises->id }}" class="form-check-input"
                                                type="checkbox" /><label class="form-check-label"
                                                for="formCheck-{{ $exercises->id }}" style="font-weight: bold;">Select
                                                Exercise</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
                <div class="pagination  ">
                    <span class="page-number">Page {{ $courses->currentPage() }} of
                        {{ $courses->lastPage() }}</span>
                    <ul class="pagination-links">
                        @if ($courses->onFirstPage())
                            <li class="disabled"><span>&laquo;</span></li>
                        @else
                            <li><a href="{{ $courses->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                        @endif

                        @foreach ($courses->getUrlRange(1, $courses->lastPage()) as $page => $url)
                            @if ($page == $courses->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($courses->hasMorePages())
                            <li><a href="{{ $courses->nextPageUrl() }}" rel="next">&raquo;</a></li>
                        @else
                            <li class="disabled"><span>&raquo;</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
