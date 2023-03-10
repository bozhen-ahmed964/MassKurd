@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Dashboard</h3>
                </div>
            </div>
            <div class="container-fluid py-4">
                {{-- first row --}}
                <div class="row">
                    {{-- Total Member --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Member</strong>
                                    <h4 class="mb-0">{{ $totalMember }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total Male Member --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Male Member</strong>
                                    <h4 class="mb-0">{{ $totalMaleMember }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total Female Member --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Female Member</strong>
                                    <h4 class="mb-0">{{ $totalFemaleMember }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total Trainer --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-warning shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Trainer</strong>
                                    <h4 class="mb-0">{{ $totalTrainer }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- second row --}}
                <div class="row mt-5">
                    {{-- Total Exercise Number --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Exercise Number</strong>
                                    <h4 class="mb-0">{{ $totalExerciseNumber }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total Male Member --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">euro</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Income</strong>
                                    <h4 class="mb-0">55</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total Female Member --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Female Member</strong>
                                    <h4 class="mb-0">25</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total Trainer --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-warning shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Trainer</strong>
                                    <h4 class="mb-0">2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
