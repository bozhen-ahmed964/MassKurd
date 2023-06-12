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
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Billing</h3>
                </div>
            </div>
            <div class="container-fluid py-4">
                {{-- first row --}}
                <div class="row">
                    {{-- Total Member Salary Current --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total Member Salary Current </strong>
                                    <h4 class="mb-0">{{ $totalMemberSalarayCurrent }} IQD</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total member Salary Last Month --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total member Salary Last Month </strong>
                                    <h4 class="mb-0">{{ $totalMemberSalarayLastMonth }} IQD</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Total member Salary Current Month --}}
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow-dark">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <strong class="text-sm mb-0 text-capitalize">Total member Salary Current Month</strong>
                                    <h4 class="mb-0">{{ $totalMemberSalarayCurrentMonth }} IQD</h4>
                                </div>
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
                                <td>{{ $history->created_at->format('Y-m-d') }}</td>
                                <td>{{ $history->updated_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination  ">
                    <span class="page-number">Page {{ $memberHistory->currentPage() }} of
                        {{ $memberHistory->lastPage() }}</span>
                    <ul class="pagination-links">
                        @if ($memberHistory->onFirstPage())
                            <li class="disabled"><span>&laquo;</span></li>
                        @else
                            <li><a href="{{ $memberHistory->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                        @endif

                        @foreach ($memberHistory->getUrlRange(1, $memberHistory->lastPage()) as $page => $url)
                            @if ($page == $memberHistory->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($memberHistory->hasMorePages())
                            <li><a href="{{ $memberHistory->nextPageUrl() }}" rel="next">&raquo;</a></li>
                        @else
                            <li class="disabled"><span>&raquo;</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endsection
