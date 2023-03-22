@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-">
                        <div class="row">
                            {{-- fisrt square --}}
                            <div class="col-md-6 col-6">
                                <div class="card shadow-dark">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="material-icons opacity-10">account_balance</i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h6 class="text-center mb-0">Salary</h6>
                                        <span class="text-xs">Belong Interactive</span>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0">+$2000</h5>
                                    </div>
                                </div>
                            </div>
                            {{-- second square --}}
                            <div class="col-md-6 col-6">
                                <div class="card shadow-dark">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="material-icons opacity-10">account_balance_wallet</i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h6 class="text-center mb-0">Paypal</h6>
                                        <span class="text-xs">Freelance Payment</span>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0">$455.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Billing Information --}}
        <div class="row">
            <div class="col-md-7 mt-4">
                <div class="card shadow-dark">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0 text-lg">Billing Information</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            @foreach ($memberHistory as $history)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-3 ">{{ $history->Full_Name }}</h5>
                                        <span class="mb-2">Age : <span
                                                class="text-dark font-weight-bold ms-sm-2">{{ $history->Age }}</span></span>
                                        <span class="mb-2">Gender : <span
                                                class="text-dark font-weight-bold ms-sm-2">{{ $history->Gender }}</span></span>
                                        <span class="mb-2 ">Phone Number: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $history->Phone_Number }}</span></span>
                                        <span class="mb-2 ">Game Type : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $history->Game_Type }}</span>
                                        </span>
                                        <span>Pay : <span class="text-dark ms-sm-2 font-weight-bold">{{ $history->Pay }}
                                                IQD</span></span>
                                        <span>Course Pay : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $history->Course_Pay }}
                                                IQD</span></span>
                                        <span>Created Date : <span class="text-dark ms-sm-2 font-weight-bold">
                                                {{ $history->created_at }}</span></span>
                                        <span>Expire Date : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $history->updated_at }}</span></span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-dark  btn-lg px-3 mb-0" href="#">Delete</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
