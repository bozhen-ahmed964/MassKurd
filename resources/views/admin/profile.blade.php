@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Member Profile</h3>
                </div>

                <div class="container-fluid px-2 px-md-4">
                    <div class="page-header min-height-300 border-radius-xl mt-4"
                        style="background-image: url('{{ asset('/images/profileImage.jpeg') }}');">
                        <span class="mask  bg-gradient-dark  opacity-6"></span>
                    </div>



                    {{-- information section --}}
                    <div class="card card-body shadow-dark mx-3 mx-md-4 mt-n6">
                        <div class="row gx-4 mb-2">
                            <div class="col-auto my-auto">
                                <div class="h-100">
                                    <h4 class="mb-1">
                                        Gym Name
                                    </h4>
                                    <p class="mb-0 font-weight-normal text-lg">
                                        Owner Name
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="row">
                                {{-- 1 --}}
                                <div class="col-4 col-xl-4">
                                    <div class="card card-plain h-100">
                                        <div class="card-body p-3">
                                            <hr class="horizontal gray-light my-4">
                                            <ul class="list-group">
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg">
                                                    <strong class="text-dark">Name:</strong> &nbsp;
                                                    {{ $profileData->Full_Name }}
                                                </li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Age:</strong> &nbsp; {{ $profileData->Age }}</li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Gender:</strong> &nbsp; {{ $profileData->Gender }}
                                                </li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Phone Number:</strong> &nbsp;
                                                    {{ $profileData->Phone_Number }}</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                {{-- 2 --}}
                                <div class="col-4 col-xl-3">
                                    <div class="card card-plain h-100">
                                        <div class="card-body p-3">
                                            <hr class="horizontal gray-light my-4">
                                            <ul class="list-group">
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Weight:</strong> &nbsp;
                                                    {{ $profileData->Weight }}Kg</li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Height:</strong> &nbsp;
                                                    {{ $profileData->Height }}Cm</li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Game Type:</strong> &nbsp;
                                                    {{ $profileData->Game_Type }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- 3 --}}
                                <div class="col-4 col-xl-3">
                                    <div class="card card-plain h-100">
                                        <div class="card-body p-3">
                                            <hr class="horizontal gray-light my-4">
                                            <ul class="list-group">
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Pay:</strong> &nbsp; {{ $profileData->Pay }}IQD
                                                </li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Course Pay:</strong> &nbsp; {{ $profileData->Course_Pay }}IQD
                                                </li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">Start Date:</strong> &nbsp;
                                                    {{ $profileData->created_at }}</li>
                                                <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                        class="text-dark">End Date:</strong> &nbsp;
                                                    {{ $profileData->updated_at }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        </div>
                        {{-- buttons --}}
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ url('/buildingCourse') }}" class="btn btn-dark btn-lg">Get Training Course</a>
                                <a href="{{ url('bill/' . $profileData->id) }}" class="btn btn-primary btn-lg">Print
                                    Bill</a>
                            </div>
                        </div>
                    </div>





                    {{-- table section --}}
                    <div class="card card-body shadow-dark mx-3 mx-md-4 mt-6">

                        <div class="row">
                            <div class="row">


                                {{-- 1 --}}
                                <div class="col-6 col-xl-9">
                                    <div class="card card-plain h-100">
                                        <div class="card-body p-3">
                                            <div class="table-responsive border rounded">
                                                <table class="table table-hover shadow-dark align-items-center">
                                                    <thead style="font-size:18px;background-color:#494949d5;color:white;">
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>Exercise Name</th>
                                                            <th>Primary Muscle</th>
                                                            <th>Set</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-weight: bold; font-size:20px;  color:black;">
                                                        @foreach ($profileData->course as $index => $course)
                                                            <tr>
                                                                <td class="text-center">{{ $index + 1 }}</td>
                                                                <td>{{ $course->Exercise_Name }}</td>
                                                                <td class="text-center">{{ $course->Primary_Muscle }}</td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('destroyProfile', [$profileData->id, $course->id]) }}"
                                                                        method="post">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-sm">delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endsection
