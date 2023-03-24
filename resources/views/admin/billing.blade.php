@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-xl-6">
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
                                    <h6 class="text-center mb-0" style="font-size: 24px;">Total Member Salaray By This Month
                                    </h6>
                                    <span class="text-xs">Belong Interactive</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0" style="font-size: 26px;">$2000</h5>
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
                                    <h6 class="text-center mb-0" style="font-size: 24px;">Total Member Salaray By This Year
                                    </h6>
                                    <span class="text-xs">Freelance Payment</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0" style="font-size: 26px;">$455.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-dark">
                        <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                <i class="material-icons opacity-10">account_balance_wallet</i>
                            </div>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0" style="font-size: 24px;">Total Member Salaray Now</h6>
                            <span class="text-xs">Freelance Payment</span>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0" style="font-size: 26px;">$455.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Billing Information --}}
    <div class="row mt-5">
        <div class="border rounded">
            <table class="table table-hover shadow-dark align-items-center">
                <thead style="font-size:18px;background-color:#494949d5;color:white;">
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Game Type</th>
                    <th>Pay</th>
                    <th>Course Pay</th>
                    <th>Join Date</th>
                    <th>Expire Date</th>
                </thead>
                <tbody style="font-weight: bold; font-size:20px; text-align:left; color:black;">
                    @foreach ($memberHistory as $history)
                        <tr>
                            <td>{{ $history->Full_Name }}</td>
                            <td>{{ $history->Age }}</td>
                            <td>{{ $history->Gender }}</td>
                            <td>{{ $history->Game_Type }} </td>
                            <td>{{ $history->Pay }} IQD</td>
                            <td>{{ $history->Course_Pay }} IQD</td>
                            <td>{{ $history->created_at }}</td>
                            <td>{{ $history->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
